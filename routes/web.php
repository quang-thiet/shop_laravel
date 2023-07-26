<?php

use App\Events\OrderEvent;
use App\Jobs\ProcessOrderEvent;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\CheckOutController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestQueueController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}/{id}', [ProductController::class,'show'])->where(['id'=> '[0-9]+'])->name('single.product');


#admin

Route::middleware('auth', 'check.admin')->prefix('admin')->group(function () {
    #user
    Route::get('/', [UserController::class, 'index'])->name('user.list');
    Route::get('/user/form-add', [UserController::class, 'add'])->name('user.form.add');
    Route::post('/process-add-user', [UserController::class, 'store'])->name('process,add.user');
    Route::get('/user/detail/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete-user/{id}',[UserController::class, 'destroy'])->name('delete.user');

    #product
    Route::get('/product/list',[ProductController::class, 'index'])->name('product.list');
    Route::get('/product/add-product',[ProductController::class, 'create'])->name('product.add');
    Route::post('/product/process-add-product',[ProductController::class, 'store'])->name('process.add.product');
    Route::get('/product/edit-product/{id}',[ProductController::class
    , 'edit'])->name('product.edit');
    Route::post('/product/update-product/{id}',[ProductController::class
    , 'update'])->name('product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');

    #category
    Route::get('/category/list',[CategoryController::class,'index'])->name('category.list');
    Route::get('/category/form-add-category',[CategoryController::class,'create'])->name('category.add');
    Route::post('/category/process-add-category',[CategoryController::class,'store'])->name('category.process.add');
    Route::get('/category/edit-category/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update-category/{id}',[CategoryController::class,'update'])->name('update.category');
    Route::get('/category/delete-category/{id}',[CategoryController::class,'destroy'])->name('category.delete');

});


######## client

Route::middleware('auth')->prefix('user')->group(function(){

    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('edit_address',[ProfileController::class,'update_address'])->name('edit.profile');
    Route::post('update_information',[ProfileController::class,'update_information'])->name('update.information.profile');
    
});

#profile



#cart
Route::get('/list-cart',[CartController::class,'index'])->name('list.cart.user');
Route::get('/cart-{id}',[CartController::class,'store'])->name('add.cart');
route::get('/update-cart',[CartController::class,'update'])->name('update.cart');
Route::get('/delete-cart/{id}', [CartController::class,'delete_session'])->name('delete.cart');


#check out

Route::get('check-out',[CheckOutController::class,'index'])->name('check.out')->middleware('auth');
Route::post('process-check-out',[CheckOutController::class,'ProcessCheckout'])->name('process.check.out');

route::get('check-out-success',[CheckOutController::class,'checkout_success']);



#login

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/auth/login', [LoginController::class, 'ProcessLogin'])->name('process-login');

#register

Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::post('/auth/register', [RegisterController::class, 'ProcessRegister'])->name('process-register');

#logout

Route::get('logout', [LoginController::class, 'Logout'])->name('logout');


#test Queue

Route::get('store-queue',[TestQueueController::class,'storeQueue']);

#test Event

Route::get('store-event',function(){
    $data_order = [
        'ab'=>2,
        'sds'=>4,
        'ghgfhgf'=>'hgfghf',
        ] ;
    $data_items= 2;
    dd(gettype($data_order));
    ProcessOrderEvent::dispatch($data_order,$data_items);
    // dispatch(new ProcessOrderEvent($data_order, $data_items));
    return true ; 
});

#test send mail

Route::get('send_mail',[EmailController::class,'Send_mail']);


#test

Route::get('form-test',[TestController::class,'index']);
Route::post('process',[TestController::class,'process'])->name('test');