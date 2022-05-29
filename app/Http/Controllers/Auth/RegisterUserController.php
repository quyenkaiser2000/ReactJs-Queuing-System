<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisterUserController extends Controller
{
    public function index(){
        return view('login.register');
    }
    public function create(Request $request){
        $errorconfirmpas  = session('errorconfirmpas');
        if($request->password != $request->password_confirmation)
        {
            return redirect()->back()->with('errorconfirmpas', 'Mật khẩu nhập lại không chính xác');
        }
       else{
            $user = new User([
                'name' => $request['name'],
                'email' => $request['email'],
                'username' => $request['email'],
                'phone' => $request['sdt'],
                'password' => Hash::make($request['password']),
            
            ]);
            $user->save();
            return redirect('/');
       }
    }
}
