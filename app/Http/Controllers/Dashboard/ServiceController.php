<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('dichvu.dichvu');
    }
    public function create(){
        return view('dichvu.createdichvu');
    }
    public function update(){
        return view('dichvu.updatedichvu');
    }
    public function detail(){
        return view('dichvu.detaildichvu');
    }
}
