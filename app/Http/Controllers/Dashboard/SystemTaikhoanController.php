<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class SystemTaikhoanController extends Controller
{
    public function index(){
        $useravatar = User::find(Auth::user()->id);
        return view('systemtaikhoan.index',compact('useravatar'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);
        $roles = Role::all();
        return view('systemtaikhoan.createtaikhoan',compact('useravatar','roles'));
    }
}
