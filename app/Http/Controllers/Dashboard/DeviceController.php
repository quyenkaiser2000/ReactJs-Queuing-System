<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Service;
use App\Models\User;
use App\Models\DeviceCategory;
use App\Models\DeviceDetail;
use DB;

use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    public function index(){
        $devices =  Device::paginate(5);
       /* $devicedetails = DeviceDetail::select('device_id', DB::raw("CONCAT(service_id) as total_sales"))->groupBy('device_id')->get();*/
        
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

        return redirect()->back();
    }
}
