<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use \Illuminate\Support\Facades\Auth;
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
Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/login', [HomeController::class,'login'])->name('login');
Route::post('/login', [HomeController::class,'log'])->name('log');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::post('/register', [HomeController::class,'reg'])->name('reg');

Route::group(['middleware'=>'auth'],function (){
    Route::get('/account',[AccountController::class,'index'])->name('account');
    Route::group(['middleware'=>'is_admin'],function (){
        Route::get('/admin', [AdminController::class,'index'])->name('admin_home');
    });
});







Route::get('/logout',function (){
    Auth::logout();
    return redirect('/');
})->name('logout');
