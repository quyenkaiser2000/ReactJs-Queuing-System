<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){
        $useravatar = User::find(Auth::user()->id);
        $services =  Service::paginate(5);
        return view('dichvu.dichvu',compact('useravatar','services'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);
        return view('dichvu.createdichvu',compact('useravatar'));
    }
    public function createnew(Request $request){
        
        $data = $request->all();
        Service::create($data);
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
        return redirect()->back();

    }
    
    public function detail($id){
        $useravatar = User::find(Auth::user()->id);
        $service = Service::findOrFail($id);
        return view('dichvu.detaildichvu',compact('useravatar','service'));
    }
}
