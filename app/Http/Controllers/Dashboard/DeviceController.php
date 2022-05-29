<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Service;
use App\Models\User;
use App\Models\UserDiary;
use App\Models\DeviceCategory;
use App\Models\DeviceDetail;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    public function index(Request $request){
        $action = $request->action ?? 2;
        $connect = $request->connect ?? 2;
        $search = $request->search ?? '';

        
        
        if($action == '2' && $connect != '2'){
            $devices = Device::select('id','code_device','name','ip','status_action','status_connect')
            ->where('status_connect', $action)->paginate(9);
        }
        if($connect == '2' && $action != '2')
        {
            $devices = Device::select('id','code_device','name','ip','status_action','status_connect')
            ->where('status_action', $action)->paginate(9);
        }
        if($action != '2' && $connect != '2'){
            $devices = Device::select('id','code_device','name','ip','status_action','status_connect')
            ->where('status_action', $action)->where('status_connect',$connect)->paginate(9);
        }

        
        if($action == '2' && $connect == '2'){
            $devices = Device::paginate(9);
        }
        $devices = Device::select('id','code_device','name','ip','status_action','status_connect')->where('name','like','%'. $search .'%')->paginate(9);
        
        
        $devices->appends(['action' => $action,'connect' => $connect]);
        return view('thietbi.thietbi',compact('devices'));
    }
    

   



    public function detail($id){
        $device =  Device::findOrFail($id);

        return view('thietbi.detailthietbi',compact('device'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);
        $devicecategorys = DeviceCategory::all();
        $services = Service::all();
        return view('thietbi.createthietbi',compact('useravatar','devicecategorys','services'));
    }
    public function createnew(Request $request){
        
        //dd($request->all());
        $id_device_category = DeviceCategory::select('id')->where('name',$request->category_device)->get();
        
        $device = new Device([
            'code_device' => $request->ma_device,
            'device_category_id' => $id_device_category[0]->id,
            'name' => $request->name_device,
            'ip' => $request->ip_device,
            'namelogin'=> $request->name_login_device,
            'pass' => $request->pas_login_device,
            'status_action' => '1',
            'status_connect' => '1',
           
        ]);
        $device->save();

        $states = $request->states;
        foreach ($states as $state)
        {
            $id_service = Service::select('id')->where('name',$state)->get();
            $devicedetail = new DeviceDetail([
                'device_id' => $request->ma_device,
                'service_id' => $id_service[0]->id,
               
            ]);
            $devicedetail->save();
        }


        $device = Device::select('id','name','created_at')->orderBy('created_at', 'DESC')->get()->first();
        
        $description = "Tạo thiết bị ". '' .$device->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $device->created_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();

        return redirect()->back();
    }
    public function edit($id){
        $device =  Device::findOrFail($id);
        $services = Service::all();
        $devicecategorys = DeviceCategory::all();

        return view('thietbi.updatethietbi',compact('device','services','devicecategorys'));
    }
    public function update(Request $request, $id){

        $device =  Device::findOrFail($id);
        $id_device_category = DeviceCategory::select('id')->where('name',$request->category_device)->get();

        $device->code_device = $request->ma_device;
        $device->device_category_id = $id_device_category[0]->id;
        $device->name = $request->name_device;
        $device->ip = $request->ip;
        $device->namelogin = $request->namelogin;
        $device->pass = $request->pas;
        $device->status_action = '1';
        $device->status_connect ='1';
        $device->save();

        $device = Device::select('id','name','updated_at')->orderBy('updated_at', 'DESC')->get()->first();
        
        $description = "Cập nhật thiết bị ". '' .$device->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $device->updated_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();

        return redirect()->back();
    }
}
