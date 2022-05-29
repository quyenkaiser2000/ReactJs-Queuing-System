<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRoleDetail;
use App\Models\RoleDetail;
use App\Models\UserDiary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SystemTaikhoanController extends Controller
{
    public function index(Request $request){
        $search = $request->search ?? '';
        $action = $request->action ?? 0;
        $useravatar = User::find(Auth::user()->id);
        $users = User::select('id', 'username','name','email','status','role_id','phone')->paginate(9);
        $roles = Role::all();

        if($action != '0'){
            $users = User::select('id', 'username','name','email','status','role_id','phone')->where('role_id', $action)->paginate(1);
        }
        if($action == '0'){
            $users = User::paginate(9);
            
        }
        if($search != ''){
            $users = User::select('id', 'username','name','email','status','role_id','phone')->where('name','like','%'. $search .'%')->paginate(9);
        }
        $users->appends(['action' => $action]);
        return view('systemtaikhoan.index',compact('useravatar','users','roles'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);
        $roles = Role::all();
        return view('systemtaikhoan.createtaikhoan',compact('useravatar','roles'));
    }
    public function createnew(Request $request){
        //dd($request->all());
        $errorconfirmpas  = session('errorconfirmpas');
        if($request->password != $request->password_enter)
                    {
                        return redirect()->back()->with('errorconfirmpas', 'Mật khẩu nhập lại không chính xác');

                    }
        $user_new = User::select('id', 'username','name','email','status','role_id','phone')->orderBy('created_at', 'DESC')->get()->first();
        

        $user_new->id = $user_new->id +1 ;
        
        $id_role_detail = RoleDetail::select('id')->where('role_id', $request->role)->get()->first();
        
        $userroledetail = new UserRoleDetail([
            'user_id'=> $user_new->id,
            'role_detail_id'=> $id_role_detail->id,
        ]);
        $userroledetail->save();
        
       
        $user = new User([
            'name' => $request->hoten,
            'username'=> $request->name_login_device,
            'password' => Hash::make($request['password']),
            'email'=> $request->email,
            'status'=> $request->status,
            'role_id'=> $request->role,
            'phone'=> $request->sdt,
        ]);
        $user->save();



        $user = User::select('id','name','created_at')->orderBy('created_at', 'DESC')->get()->first();
        
        $description = "Tạo tài khoản ". '' .$user->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $user->created_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        
        

        return redirect()->back();

    }
    public function edit($id){
        $useravatar = User::find(Auth::user()->id);
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('systemtaikhoan.edittaikhoan',compact('useravatar','roles','user'));
    }
    public function update(Request $request,$id){
        $errorconfirmpas  = session('errorconfirmpas');
        
        if($request->password != $request->password_enter)
                    {
                        return redirect()->back()->with('errorconfirmpas', 'Mật khẩu nhập lại không chính xác');

                    }
        $id_role_detail = RoleDetail::select('id')->where('role_id', $request->role)->get()->first();
        $userroledetail = UserRoleDetail::select('user_id','role_detail_id')->where('user_id',$id)->get()->first();
        
        $userroledetail->user_id= $id;
        $userroledetail->role_detail_id= $id_role_detail->id;

        $userroledetail->save();
        

        $user = User::findOrFail($id);
        if($user->password != $request->password){
            $user->password = Hash::make($request['password']);
        }
        else{
            $user->password = $request->password;
        }
        $user->name = $request->hoten;
        $user->username= $request->name_login_device;
        
        $user->email= $request->email;
        $user->status= $request->status;
        $user->role_id= $request->role;
        $user->phone= $request->sdt;
        $user->save();


        $user = User::select('id','name','updated_at')->orderBy('updated_at', 'DESC')->get()->first();
        
        $description = "Tạo tài khoản ". '' .$user->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $user->updated_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        

        return redirect()->back();
    }
}
