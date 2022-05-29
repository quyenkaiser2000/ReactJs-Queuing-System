<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\NumberLevel;
use App\Models\UserDiary;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CapsoController extends Controller
{
    public function index(Request $request){
        $service = $request->service ?? 0;
        $status = $request->status ?? 3;
        $nguoncap = $request->nguoncap ?? 2;
        $search = $request->search ?? '';
        if($nguoncap == '1') {
            $nguoncap = 'Kiosk';
        }
        if($nguoncap == '0'){
            $nguoncap = 'Hệ thống';
        }
        
        $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')->paginate(9);
        $services = Service::all();
       
        if($service == '0' && $status != '3' && $nguoncap != '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('status', $status)->where('nguoncap',$nguoncap)->paginate(9);
        }
        if($service != '0' && $status == '3' && $nguoncap != '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('service_id', $service)->where('nguoncap',$nguoncap)->paginate(9);
        }
        if($service != '0' && $status != '3' && $nguoncap == '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('service_id', $service)->where('status',$status)->paginate(9);
        }
//////////////////

        if($service == '0' && $status == '3' && $nguoncap != '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('nguoncap',$nguoncap)->paginate(9);
        }
        if($service == '0' && $status != '3' && $nguoncap == '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('status',$status)->paginate(9);
        }
        if($service != '0' && $status == '3' && $nguoncap == '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('service_id', $service)->paginate(9);
        }

////////////////////////////////////////////////////////////////
        if($service == '0' && $status == '3' && $nguoncap == '2'){
            $numberlevels = NumberLevel::paginate(9);
        }
        if($service != '0' && $status != '3' && $nguoncap != '2'){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->where('service_id', $service)->where('status',$status)->where('nguoncap',$nguoncap)->paginate(9);
        }
        if($search != ''){
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')->where('nguoncap','like','%'. $search .'%')->paginate(9);
        }
        if($request->dates != null){
            $ex_dates = explode(" - ",$request->dates);
            
            $numberlevels = NumberLevel::select('id','user_id','service_id','stt','start_day','end_day','nguoncap','status')
            ->whereBetween('created_at', [$ex_dates[0], $ex_dates[1]])
            ->paginate(9);

        }
        $numberlevels->appends(['service' => $service,'status' => $status,'nguoncap' => $nguoncap]);
        return view('capso.capso',compact('numberlevels','services'));
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
            'user_id' => Auth::user()->id,
            'nguoncap'=> 'Kiosk',
            'start_day'=> $start_day_format,
            'end_day' => $endOfDay,
            'status' => '1',
            'stt' => $stt
           
        ]);
        $numberlevel->save();

        $numberlevel = NumberLevel::select('id','stt','created_at')->orderBy('created_at', 'DESC')->get()->first();
        
        $description = "Cấp số ". '' .$numberlevel->stt;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $numberlevel->created_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        return redirect()->back();
    }
    public function detail($id){
        $numberlevel = NumberLevel::findOrFail($id);
        return view('capso.detailcapso',compact('numberlevel'));
    }



    public function create_user(){
        $services = Service::all();

        $numberlevel = NumberLevel::select('stt','start_day','end_day','service_id')->orderBy('created_at', 'DESC')->get()->first();
    
        return view('capso.capsomoi_user',compact('services','numberlevel'));
    }
    public function createnew_user(Request $request){
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
            'user_id' => Auth::user()->id,
            'nguoncap'=> 'Kiosk',
            'start_day'=> $start_day_format,
            'end_day' => $endOfDay,
            'status' => '1',
            'stt' => $stt
           
        ]);
        $numberlevel->save();

        $numberlevel = NumberLevel::select('id','stt','created_at')->orderBy('created_at', 'DESC')->get()->first();
        
        $description = "Cấp số ". '' .$numberlevel->stt;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $numberlevel->created_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        return redirect()->back();
    }
}
