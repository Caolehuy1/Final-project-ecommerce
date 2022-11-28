<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use function Termwind\style;

class CheckOutController extends Controller
{
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total','subtotal'));
    }

    public function addOrder(Request $request)
    {
        //them don hang
        $order =  Order::create($request->all());

        //them chi tiet don hang
        $carts = Cart::content();

        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount'=> $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            OrderDetail::create($data);
        }
        if ($request->payment_type == 'pay_later'){

            //gui email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order,$total,$subtotal);


            //xoa gio hang
            Cart::destroy();
            //tra ve ket qua

            return  redirect('checkout/result')
                ->with('notification','Success! You will pay on delivery.Please check your email.');
        }

        if ($request->payment_type == 'online_payment'){
            // lay URL thanh toan VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //ID cua don hang
                'vnp_OrderInfo' => 'Order description here... ',
                'vnp_Amount' => Cart::total(0,'','') * 24770, // nhan voi ti gia de chuyen sang tien viet
            ]);

            // chuyen huong toi URL lay duoc
            return redirect()->to($data_url);
        }

    }
    public function vnPayCheck(Request $request)
    {
        // lay data tu URL(do vnPay gui ve qua $vnp_returnurl)
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //ma phan hoi ket qua thanh toan. 00= thanh cong
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //ticket_id
        $vnp_Amount = $request->get('vnp_Amount'); //so tien thanh toan.

        // kiem tra ket qua gia dich tra ve tu VNPay

        if ($vnp_ResponseCode != null) {
            //neu thanh cong.
            if ($vnp_ResponseCode == 00) {
            // gui: email
                $order = Order::find($vnp_TxnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order,$total,$subtotal);

                // xoa gio hang
                Cart::destroy($order);

                // thong bao ket qua thanh cong .
                return  redirect('checkout/result')
                    ->with('notification','Has paid online.Please check your email.');
            } else {   //neu khong thanh cong
                // xoa don hang da them vao database
                Order::find($vnp_TxnRef)->delete();
                //tra ve thong bao loi
                return  redirect('checkout/result')
                    ->with('notification','ERROR: Payment failed or canceled.');

            }

        }

    }

    public function result()
    {
        $notification = session('notification');
//        $notification = "Info...";
        return view('front.checkout.result',compact('notification'));
    }

    private function sendEmail($order,$total,$subtotal){
        $email_to = $order->email;

            Mail::send('front.checkout.email', compact('order','total','subtotal') , function ($message) use($email_to)  {
                $message->from('caolehuy1@gmail.com','Shop eCommerce');
                $message->to($email_to, $email_to);
                $message->subject('order Notification');

            });
    }
}
