<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NumberLevel;
use App\Models\Service;
class BaocaoController extends Controller
{
    public function index(Request $request){
        $baocaos = NumberLevel::select('stt','service_id','status','start_day','nguoncap')->paginate(9);
        if($request->dates != null){
            $ex_dates = explode(" - ",$request->dates);
            
            $baocaos = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->whereBetween('created_at', [$ex_dates[0], $ex_dates[1]])
            ->paginate(9);

        }
        return view('baocao.index',compact('baocaos'));
    }
}
