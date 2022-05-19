<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemNguoidungController extends Controller
{
    public function index(){
        return view('systemnguoidung.index');
    }
}
