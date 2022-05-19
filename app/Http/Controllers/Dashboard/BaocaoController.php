<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaocaoController extends Controller
{
    public function index(){
        return view('baocao.index');
    }
}
