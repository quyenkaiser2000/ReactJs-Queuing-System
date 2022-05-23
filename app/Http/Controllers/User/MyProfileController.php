<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class MyProfileController extends Controller
{
    public function index(){
        $useravatar = User::find(Auth::user()->id);
        return view('dashboard.myprofile',compact('useravatar'));
    }
    public function show(Request $request){
        
        
        return view('dashboard.myprofile');
    }
    public function test(Request $request){

        $useravatar = User::find(Auth::user()->id);
        if($request->avatar != null)
        {
            
            if($request->hasFile('avatar'))
            {
                
                $destination_path = 'public/pathimg';
                $avatar = $request->file('avatar');
                $avatar_name = $avatar->getClientOriginalName();
                $path = $request->file('avatar')->storeAs( $destination_path,$avatar_name);
            
                $useravatar->avatar = $avatar_name;
                $useravatar->save();
            }
            
        }
        return redirect()->back();
    }
}
