<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
    return view('login/login');
});
Route::get('/send-mail', function () {
    return view('login/email');
});
Route::get('/forgotpas', function () {
    return view('login/forgotpas');
});
Route::post('send-mail', [App\Http\Controllers\ResetPasswordController::class, 'sendMail'])->name('sendMail');

Route::get('reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class, 'showreset']);
Route::post('reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class, 'reset']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
