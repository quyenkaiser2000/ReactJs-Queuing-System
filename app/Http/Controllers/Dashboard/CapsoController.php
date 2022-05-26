<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\NumberLevel;
use Carbon\Carbon;
class CapsoController extends Controller
{
    public function index(){
        return view('capso.capso');
    }
    public function create(){
        $services = Service::all();
        return view('capso.capsomoi',compact('services'));
    }
    public function createnew(Request $request){
        
        $service = Service::all()->where('name',$request->category_device)->first();

        $start_day = Carbon::now();
        $start_day_format = Carbon::createFromFormat('Y-m-d H:i:s', $start_day->toDateTimeString())->format('H:i m/d/Y');

        $end_day = $start_day->addDays(5);
        $end_day_format = Carbon::createFromFormat('Y-m-d H:i:s', $end_day->toDateTimeString())->format('H:i m/d/Y');
        
        

        dd($service->code_service);
        $numberlevel = new NumberLevel([
            'service_id' => $service->id,
            'name' => 'Lê Ái Vân',
            'phone' => '123456789',
            'email' => 'leaivan@gmail.com',
            'nguoncap'=> 'Kiosk',
            'start_day'=> $start_day_format,
            'discount' => $end_day_format,
            'status' => '1',
            'stt' => '1'
           
        ]);
        $numberlevel->save();
    }
    public function detail(){
        return view('capso.detailcapso');
    }
}
