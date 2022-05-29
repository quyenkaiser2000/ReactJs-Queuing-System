<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\RoleDetail;
use App\Models\UserRoleDetail;
use App\Models\UserDiary;
use Illuminate\Support\Facades\Auth;

class SystemVaitroController extends Controller
{
    public function index(Request $request){
        $search = $request->search ?? '';
        
        $useravatar = User::find(Auth::user()->id);
        $roles = Role::all();

        if($search != ''){
            $roles = Role::select('id','name','decription')->where('name','like','%'. $search .'%')->get();
            
        }
        return view('systemvaitro.index',compact('useravatar','roles'));
    }
    public function create(){
        $useravatar = User::find(Auth::user()->id);
        
        return view('systemvaitro.createvaitro',compact('useravatar'));
    }
    public function createnew(Request $request){
        
        $role = new Role([
            'name' => $request->name_role,
            'decription' => $request->decription,
            'chucnang' => $request->name_role,
           
        ]);
        $role->save();
        $role_end = Role::select('id')->orderBy('created_at', 'DESC')->get()->first();
        if($request->Xem_thiết_bị != null)
        {
            $roledetail = new RoleDetail([
                'role_id' => $role_end->id,
                'chucnang_1'=> $request->Xem_thiết_bị,
                'chucnang_2'=> $request->Thêm_thiết_bị,
                'chucnang_3'=> $request->Cập_nhật_thiết_bị,
                'chucnang_4'=> $request->Xem_dịch_vụ,
                'chucnang_5'=> $request->Cập_nhật_dịch_vụ,
                'chucnang_6'=> $request->Thêm_dịch_vụ,
                'chucnang_7'=> $request->Cấp_số,
                'chucnang_8'=> $request->Xem_chi_tiết_cấp_số,
                'chucnang_9'=> $request->Báo_cáo,
                'chucnang_10'=> $request->Quản_lý_vai_trò,
                'chucnang_11'=> $request->Quản_lý_tài_khoản,
                'chucnang_12'=> $request->Quản_lý_người_dùng,
            ]);
            $roledetail->save();
        }

        $role_end = Role::select('id','name','created_at')->orderBy('created_at', 'DESC')->get()->first();
        
        $description = "Tạo vai trò ". '' .$role_end->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $role_end->created_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        return redirect()->back();
    }
    public function edit($id){
        $useravatar = User::find(Auth::user()->id);
        $role = Role::find($id);
        
        $roledetail = RoleDetail::select('id','chucnang_1','chucnang_2','chucnang_3','chucnang_4','chucnang_5','chucnang_6','chucnang_7','chucnang_8','chucnang_9','chucnang_10','chucnang_11','chucnang_12')->where('role_id', $role->id)->get()->first();
        
        return view('systemvaitro.detailvaitro',compact('useravatar','role','roledetail'));
    }
    public function update(Request $request, $id){
        $role = Role::findOrFail($id);
        $role->name = $request->name_role;
        $role->decription = $request->decription;
        $role->chucnang = $request->name_role;
        $role->save();

        $roledetail = RoleDetail::select('id','role_id','chucnang_1','chucnang_2','chucnang_3','chucnang_4','chucnang_5','chucnang_6','chucnang_7','chucnang_8','chucnang_9','chucnang_10','chucnang_11','chucnang_12')->where('role_id',$role->id)->get()->first();
                $roledetail->role_id = $role->id;
                $roledetail->chucnang_1= $request->Xem_thiết_bị;
                $roledetail->chucnang_2= $request->Thêm_thiết_bị;
                $roledetail->chucnang_3= $request->Cập_nhật_thiết_bị;
                $roledetail->chucnang_4= $request->Xem_dịch_vụ;
                $roledetail->chucnang_5= $request->Cập_nhật_dịch_vụ;
                $roledetail->chucnang_6= $request->Thêm_dịch_vụ;
                $roledetail->chucnang_7= $request->Cấp_số;
                $roledetail->chucnang_8= $request->Xem_chi_tiết_cấp_số;
                $roledetail->chucnang_9= $request->Báo_cáo;
                $roledetail->chucnang_10= $request->Quản_lý_vai_trò;
                $roledetail->chucnang_11= $request->Quản_lý_tài_khoản;
                $roledetail->chucnang_12= $request->Quản_lý_người_dùng;
        $roledetail->save();

        $role_end = Role::select('id','name','updated_at')->orderBy('updated_at', 'DESC')->get()->first();
        
        $description = "Cập nhật thông tin vai trò ". '' .$role_end->name;
        $UserDiary = new UserDiary([
            'user_id' => Auth::user()->id,
            'time_action'=> $role_end->updated_at,
            'ip_action' => request()->ip(),
            'description_action' => $description 
        ]);
        $UserDiary->save();
        return redirect()->back();
    }

}
