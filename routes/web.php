<?php
use \App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Front\homeController::class,'index'] );

Route::prefix('shop')->group(function () {

Route::get('/product/{id}',[Front\ShopController::class, 'show']);
Route::post('/product/{id}',[Front\ShopController::class, 'postComment']);

Route::get('/',[Front\ShopController::class, 'index']);

Route::get('/{categoryName}',[Front\ShopController::class, 'category']);


});

Route::prefix('cart')->group(function () {
    Route::get('add/{id}' , [Front\CartController::class,'add' ]);
    Route::get('/',[Front\CartController::class, 'index']);
    Route::get('delete/{rowId}',[Front\CartController::class, 'delete']);
    Route::get('/destroy',[Front\CartController::class, 'destroy']);
    Route::get('/update',[Front\CartController::class,'update']);

});
Route::prefix('checkout')->group(function () {
    Route::get('/',[Front\CheckOutController::class,'index']);
    Route::post('/',[Front\CheckOutController::class,'addOrder']);
    Route::get('/vnPayCheck',[Front\CheckOutController::class,'vnPayCheck']);
    Route::get('/result',[Front\CheckOutController::class,'result']);
});


    Route::get('/blog', [Front\Blog::class, 'show']);

    Route::get('/contact',[Front\ContactController::class, 'show']);

    Route::get('/page',[Front\BlogDetailsController::class,'show']);

Route::get('/faq',[Front\FaqController::class,'show']);

Route::get('/register',[Front\RegisterController::class,'show']);

Route::get('/login',[Front\LoginController::class,'show']);



Route::get('admincp/login', ['as' => 'getLogin', 'uses' => 'Admin\AdminLoginController@getLogin']);
Route::post('admincp/login', ['as' => 'postLogin', 'uses' => 'Admin\AdminLoginController@postLogin']);
Route::get('admincp/logout', ['as' => 'getLogout', 'uses' => 'Admin\AdminLoginController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
    Route::get('/', function() {
        return view('admin.home');
    });
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
