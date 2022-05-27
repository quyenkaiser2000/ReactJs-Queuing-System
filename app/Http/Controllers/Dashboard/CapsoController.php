<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\NumberLevel;
use Carbon\Carbon;
use Illuminate\Support\Str;
class CapsoController extends Controller
{
    public function index(){
        $numberlevels = NumberLevel::select('id','stt','name','service_id','status','start_day','end_day','nguoncap')->paginate(9);

       

        return view('capso.capso',compact('numberlevels'));
    }
    public function create(){
        $services = Service::all();

        $numberlevel = NumberLevel::select('stt','start_day','end_day','service_id')->orderBy('created_at', 'DESC')->get()->first();
    
        return view('capso.capsomoi',compact('services','numberlevel'));
    }
    public function createnew(Request $request){
        $service = Service::all()->where('name',$request->category_device)->first();

        $numberlevel = NumberLevel::select('stt')->where('service_id', $service->id)->orderBy('created_at', 'DESC')->get()->first();
       
        $start_day = Carbon::now();
        
        $start_day_format = Carbon::createFromFormat('Y-m-d H:i:s', $start_day->toDateTimeString())->format('H:i d/m/Y');

        $endOfDay=date("17:30 d/m/Y");

        if($service->up_auto == '1')
        {
            if($service->reset_day != '1' && $service->prefix != '1' && $service->surfix != '1')
            {
                if($numberlevel == null){
                    
                    $num_auto_firt = "000".''."1";
                    $stt = $service->code_service. '' .$num_auto_firt;
                    
                }
                else{
                    
                    $num_sub_str = Str::substr($numberlevel->stt, 2, 5);
                    $num_sub_str = $num_sub_str + "1";
                    $code_service = Str::substr($service->code_service, 0, 2);
                    $stt = $code_service. '' .$num_sub_str;
                    
                }
                
                
            }
            if($service->reset_day == '1' && $service->prefix == '1' && $service->surfix == '1')
            {
                $prefix = "0001";
                $surfix = "0001";
                $num_auto = "0000";
                
                if($numberlevel == null){
                    $num_auto_firt = "000".''."1";
                    $stt = $service->code_service. '' .$prefix. '' .$num_auto_firt. '' .$surfix;
                    
                }
                else{
                    $num_sub_str = Str::substr($numberlevel->stt, 6, 5);

                    $num_sub_str =$num_sub_str + "1";
                   // dd($num_sub_str);
                    $prefix = Str::substr($prefix, 0, 3);
                    $stt = $service->code_service. '' .$prefix. '' .$num_sub_str. '' .$surfix;

                }
                
            }
            if($service->reset_day != '1' && $service->prefix == '1' && $service->surfix != '1')
            {
                if($numberlevel == null){
                    $num_auto_firt = "000".''."1";
                    $stt = $service->code_service. '' .$num_auto_firt;
                    
                }
                else{
                    $num_sub_str = Str::substr($numberlevel->stt, 6, 5);
                
                    $num_sub_str = $num_sub_str + "1";
                    $prefix = "0001";
                    $prefix = Str::substr($prefix, 0, 3);
                    
                    $stt = $service->code_service. '' .$prefix. '' .$num_sub_str;
                }
                
                
                
            }
            if($service->reset_day != '1' && $service->prefix != '1' && $service->surfix == '1')
            {
                if($numberlevel == null){
                    $num_auto_firt = "000".''."1";
                    $stt = $service->code_service. '' .$num_auto_firt;
                    
                }
                else{
                    $num_sub_str = Str::substr($numberlevel->stt, 2, 5);
                    
                    $num_sub_str = $num_sub_str + "1";
                    $surfix = "0001";
                    $code_service = Str::substr($service->code_service, 0, 2);

                    $stt = $code_service. '' .$num_sub_str. '' .$surfix;
                
                }
                

            }
            
           
        }

        $numberlevel = new NumberLevel([
            'service_id' => $service->id,
            'name' => 'Lê Ái Vân',
            'phone' => '123456789',
            'email' => 'leaivan@gmail.com',
            'nguoncap'=> 'Kiosk',
            'start_day'=> $start_day_format,
            'end_day' => $endOfDay,
            'status' => '1',
            'stt' => $stt
           
        ]);
        $numberlevel->save();
        return redirect()->back();
    }
    public function detail($id){
        $numberlevel = NumberLevel::findOrFail($id);
        return view('capso.detailcapso',compact('numberlevel'));
    }
}
