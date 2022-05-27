<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NumberLevel;
use App\Models\Service;
class BaocaoController extends Controller
{
    public function index(){
        $baocaos = NumberLevel::select('stt','service_id','status','start_day','nguoncap')->paginate(9);

        return view('baocao.index',compact('baocaos'));
    }
}
