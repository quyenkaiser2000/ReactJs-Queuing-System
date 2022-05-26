<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SystemVaitroController extends Controller
{
    public function index(){
        $useravatar = User::find(Auth::user()->id);
        return view('systemvaitro.index',compact('useravatar'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);

        return view('systemvaitro.createvaitro',compact('useravatar'));
    }
    public function createnew(){
    }
    public function edit(){
        return view('systemvaitro.index');
    }
    public function update(){
        return view('systemvaitro.index');
    }

}
