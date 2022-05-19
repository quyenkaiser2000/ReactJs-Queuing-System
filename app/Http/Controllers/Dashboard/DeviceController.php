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
    public function create(){
        return view('thietbi.createthietbi');
    }
    public function update(){
        return view('thietbi.updatethietbi');
    }
}
