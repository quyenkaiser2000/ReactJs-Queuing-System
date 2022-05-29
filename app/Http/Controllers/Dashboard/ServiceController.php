<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\UserDiary;
use App\Models\NumberLevel;
use Carbon\Carbon;
class ServiceController extends Controller
{
    public function index(Request $request){
        $useravatar = User::find(Auth::user()->id);
        
        $action = $request->action ?? 2;
        $search = $request->search ?? '';


        if($action != '2'){
            $services = Service::select('id','code_service','name','content','status')->where('status', $action)->paginate(9);
        }
        if($action == '2'){
            $services = Service::paginate(9);
            
        }
        if($search != ''){
            $services = Service::select('id','code_service','name','content','status')->where('name','like','%'. $search .'%')->paginate(9);
        }
        if($request->dates != null){
            $ex_dates = explode(" - ",$request->dates);

            $services = Service::select('id','code_service','name','content','status')
            ->whereBetween('created_at', [$ex_dates[0], $ex_dates[1]])
            ->paginate(9);

        }
        $services->appends(['action' => $action]);
        return view('dichvu.dichvu',compact('useravatar','services'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);
        return view('dichvu.createdichvu',compact('useravatar'));
    }
    public function createnew(Request $request){
        
       $data = $request->all();
        Service::create($data);
        

        $service = Service::select('id','name','created_at')->orderBy('created_at', 'DESC')->get()->first();
        
        $description = "Tạo dịch vụ ". '' .$service->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $service->created_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();

        return redirect()->back();
    }
    public function edit($id){
        $useravatar = User::find(Auth::user()->id);
        $service = Service::findOrFail($id);
        return view('dichvu.updatedichvu',compact('useravatar','service'));
    }
    public function update(Request $request, $id){
        
        $service = Service::findOrFail($id);
        $service->code_service = $request->code_service;
        $service->name = $request->name;
        $service->content = $request->content;
        $service->up_auto = $request->up_auto;
        $service->prefix = $request->prefix;
        $service->surfix = $request->surfix;
        $service->reset_day = $request->reset_day;

        $service->save();

        $service = Service::select('id','name','updated_at')->orderBy('updated_at', 'DESC')->get()->first();
        
        $description = "Cập nhật thông tin dịch vụ ". '' .$service->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $service->updated_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        return redirect()->back();

    }
    
    public function detail(Request $request, $id){
        $action = $request->action ?? 3;
        $search = $request->search ?? '';
        $useravatar = User::find(Auth::user()->id);
        $service = Service::findOrFail($id);
        $numberlevels = NumberLevel::select('id','service_id','stt','status')->where('service_id',$id)->paginate(8);


        if($action != '3'){
            $numberlevels = NumberLevel::select('id','service_id','stt','status')->where('status', $action)->paginate(8);
        }
        if($action == '3'){
            $numberlevels = NumberLevel::paginate(8);
            
        }
        if($search != ''){
            $numberlevels = NumberLevel::select('id','service_id','stt','status')->where('stt','like','%'. $search .'%')->paginate(8);
        }
        if($request->dates != null){
            $ex_dates = explode(" - ",$request->dates);

            $numberlevels = NumberLevel::select('id','service_id','stt','status')
            ->whereBetween('created_at', [$ex_dates[0], $ex_dates[1]])
            ->paginate(8);

        }
        $numberlevels->appends(['action' => $action]);

        return view('dichvu.detaildichvu',compact('useravatar','service','numberlevels'));
    }
}
