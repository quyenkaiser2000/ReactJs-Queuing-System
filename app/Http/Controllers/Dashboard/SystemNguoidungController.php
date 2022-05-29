<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDiary;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SystemNguoidungController extends Controller
{
    public function index(Request $request){
        $search = $request->search ?? '';
        $useravatar = User::find(Auth::user()->id);
        $userdiarys = UserDiary::select('id','user_id','time_action','ip_action','description_action')->paginate(9);
        if($search != ''){
            $user = User::select('id','username')->where('username','like','%'. $search .'%')->get()->first();

            if($user != null){
                $userdiarys = UserDiary::select('id','user_id','time_action','ip_action','description_action')->where('user_id','like','%'. $user->id .'%')->paginate(9);
            }
            else{
                $userdiarys = UserDiary::select('id','user_id','time_action','ip_action','description_action')->where('id','like','%'. $search .'%')->paginate(9);
            }
        }
        if($request->dates != null){
            $ex_dates = explode(" - ",$request->dates);
            
            $userdiarys = UserDiary::select('id','user_id','time_action','ip_action','description_action')
            ->whereBetween('created_at', [$ex_dates[0], $ex_dates[1]])
            ->paginate(9);

        }
        return view('systemnguoidung.index',compact('useravatar','userdiarys'));
    }
}
