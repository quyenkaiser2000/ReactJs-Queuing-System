<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemTaikhoanController extends Controller
{
    public function index(){
        return view('systemtaikhoan.index');
    }
}
