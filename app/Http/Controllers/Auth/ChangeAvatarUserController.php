<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class ChangeAvatarUserController extends Controller
{
    public function changeavatar(Request $request){
        $useravatar = User::find($request->avatar_id);
        if($request->name_avatar != null)
        {
            if($request->hasFile('name_avatar'))
            {
                $useravatar->avatar = $request->name_avatar;
                $useravatar->save();
                
                $destination_path = 'public/pathimg';
                $avatar = $request->file('name_avatar');
                $avatar_name = $avatar->getClientOriginalName();
                $path = $request->file('name_avatar')->storeAs( $destination_path,$avatar_name);
            
                $useravatar->avatar = $avatar_name;
                $useravatar->save();
            }
            
        }
        else{
            $useravatar->avatar = 'k có';
            $useravatar->save();
        }
        return redirect()->back();
    }
}
