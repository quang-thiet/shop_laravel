<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
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
Route::get('home',[HomeController::class,'index']);


#admin

Route::middleware('auth','check.admin')->prefix('admin')->group(function (){
    #user
    Route::get('/',[UserController::class,'index'])->name('user.list');
    Route::get('/user/form-add',[UserController::class,'add'])->name('user.form.add');
    Route::post('/process-add-user',[UserController::class,'storage'])->name('process,add.user');
    Route::get('/user/detail/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');


});


#login

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/auth/login',[LoginController::class,'ProcessLogin'])->name('process-login');

#register

Route::get('register',[RegisterController::class,'index'])->name('register');

Route::post('/auth/register',[RegisterController::class,'ProcessRegister'])->name('process-register');

#logout

Route::get('logout',[LoginController::class,'Logout'])->name('logout');
