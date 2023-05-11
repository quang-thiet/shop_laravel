<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [HomeController::class, 'index']);


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
    Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
});


#login

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/auth/login', [LoginController::class, 'ProcessLogin'])->name('process-login');

#register

Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::post('/auth/register', [RegisterController::class, 'ProcessRegister'])->name('process-register');

#logout

Route::get('logout', [LoginController::class, 'Logout'])->name('logout');
