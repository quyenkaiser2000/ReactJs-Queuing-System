<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index(){
        return view('dashboard.myprofile');
    }
}
