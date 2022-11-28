<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

//    public function authorize()
//    {
//        return true;
//    }


//    public function rules()
//    {
//        return [
//            'txtEmail' => 'required',
//            'txtPassword' => 'required'
//        ];
//    }
//
//
//    public function messages()
//    {
//        return [
//            'txtEmail.required' => 'insert Your email',
//            'txtPassword.required' => 'insert Your password'
//        ];
//    }

    public function show()
    {
        return view('front.login.show');

    }
}
