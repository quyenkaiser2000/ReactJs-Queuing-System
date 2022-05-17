<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(){
        return view('thietbi.thietbi');
    }
    public function detail(){
        return view('thietbi.detailthietbi');
    }
}
