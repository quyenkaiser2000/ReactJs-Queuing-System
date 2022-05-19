<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CapsoController extends Controller
{
    public function index(){
        return view('capso.capso');
    }
    public function create(){
        return view('capso.capsomoi');
    }
    public function detail(){
        return view('capso.detailcapso');
    }
}
