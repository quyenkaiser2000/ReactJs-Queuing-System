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

Route::get('/register-user', [App\Http\Controllers\Auth\RegisterUserController::class, 'index']);
Route::post('/register-user', [App\Http\Controllers\Auth\RegisterUserController::class, 'create']);

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


Route::post('logout-user',[App\Http\Controllers\SessionsController::class, 'out']);

Route::get('/dashboard',[App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
Route::get('/myprofile',[App\Http\Controllers\User\MyProfileController::class, 'index']);

Route::get('/myprofile/{id}',[App\Http\Controllers\User\MyProfileController::class, 'show']);
Route::post('/myprofile/{id}',[App\Http\Controllers\User\MyProfileController::class, 'test']);

Route::get('/thietbi',[App\Http\Controllers\Dashboard\DeviceController::class, 'index']);
Route::get('/thietbi/chitiet/{id}',[App\Http\Controllers\Dashboard\DeviceController::class, 'detail']);
Route::get('/thietbi/themthietbi',[App\Http\Controllers\Dashboard\DeviceController::class, 'create']);
Route::post('/thietbi/themthietbi',[App\Http\Controllers\Dashboard\DeviceController::class, 'createnew']);
Route::get('/thietbi/capnhatthietbi/{id}',[App\Http\Controllers\Dashboard\DeviceController::class, 'edit']);
Route::post('/thietbi/capnhatthietbi/{id}',[App\Http\Controllers\Dashboard\DeviceController::class, 'update']);

Route::get('/dichvu',[App\Http\Controllers\Dashboard\ServiceController::class, 'index']);
Route::get('/dichvu/themdichvu',[App\Http\Controllers\Dashboard\ServiceController::class, 'create']);
Route::post('/dichvu/themdichvu',[App\Http\Controllers\Dashboard\ServiceController::class, 'createnew']);
Route::get('/dichvu/capnhatdichvu/{id}',[App\Http\Controllers\Dashboard\ServiceController::class, 'edit']);
Route::post('/dichvu/capnhatdichvu/{id}',[App\Http\Controllers\Dashboard\ServiceController::class, 'update']);
Route::get('/dichvu/chitiet/{id}',[App\Http\Controllers\Dashboard\ServiceController::class, 'detail']);


Route::get('/capso',[App\Http\Controllers\Dashboard\CapsoController::class, 'index']);
Route::get('/capso/capsomoi',[App\Http\Controllers\Dashboard\CapsoController::class, 'create']);
Route::post('/capso/capsomoi',[App\Http\Controllers\Dashboard\CapsoController::class, 'createnew']);

Route::get('/capso/capsomoi_user',[App\Http\Controllers\Dashboard\CapsoController::class, 'create_user']);
Route::post('/capso/capsomoi_user',[App\Http\Controllers\Dashboard\CapsoController::class, 'createnew_user']);

Route::get('/capso/detailcapso/{id}',[App\Http\Controllers\Dashboard\CapsoController::class, 'detail']);

Route::get('/baocao',[App\Http\Controllers\Dashboard\BaocaoController::class, 'index']);

Route::get('/system/vaitro',[App\Http\Controllers\Dashboard\SystemVaitroController::class, 'index']);
Route::get('/system/vaitro/themvaitro',[App\Http\Controllers\Dashboard\SystemVaitroController::class, 'create']);
Route::post('/system/vaitro/themvaitro',[App\Http\Controllers\Dashboard\SystemVaitroController::class, 'createnew']);
Route::get('/system/vaitro/capnhat/{id}',[App\Http\Controllers\Dashboard\SystemVaitroController::class, 'edit']);
Route::post('/system/vaitro/capnhat/{id}',[App\Http\Controllers\Dashboard\SystemVaitroController::class, 'update']);

Route::get('/system/taikhoan',[App\Http\Controllers\Dashboard\SystemTaikhoanController::class, 'index']);
Route::get('/system/taikhoan/themtaikhoan',[App\Http\Controllers\Dashboard\SystemTaikhoanController::class, 'create']);
Route::post('/system/taikhoan/themtaikhoan',[App\Http\Controllers\Dashboard\SystemTaikhoanController::class, 'createnew']);
Route::get('/system/taikhoan/capnhat/{id}',[App\Http\Controllers\Dashboard\SystemTaikhoanController::class, 'edit']);
Route::post('/system/taikhoan/capnhat/{id}',[App\Http\Controllers\Dashboard\SystemTaikhoanController::class, 'update']);

Route::get('/system/nguoidung',[App\Http\Controllers\Dashboard\SystemNguoidungController::class, 'index']);


Route::post('/myprofile/change-avatar',[App\Http\Controllers\Auth\ChangeAvatarUserController::class, 'changeavatar'])->name('change-avatar-user');

