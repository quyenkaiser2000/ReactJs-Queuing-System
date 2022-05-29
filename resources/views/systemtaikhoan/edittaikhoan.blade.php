@extends('systemtaikhoan.master')
@section('title','Thêm tài khoản')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Thiết bị</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./thietbi">Danh sách thiết bị</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Thêm thiết bị</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="">
                                    <div class="profile-mini">
                                        <span class="fa fa-solid fa-bell icon-bell click-notification"> </span>
                                        <div class="img-profile-mini" onclick="window.location='/myprofile'">
                                            <img   src="{{asset('/storage/pathimg/'.$useravatar->avatar)}}" alt="">
                                            <div class="notification hide" id="notification">
                                                <span class="title-notification">Thông báo</span>
                                                <ul class="content-notification">
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Người dùng: Nguyễn Thị Thùy Dung</span>
                                                            <span class="time">Thời gian nhận số: 12h20 ngày 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="name-profile-mini">
                                                <span>Xin chào</span>
                                                <span>{{Auth::user()->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="title-dsthietbi">
                                        <span>Quản lý thiết bị</span>
                                    </div>
                                </div>
                                    

                            </div>
                            
                            
                            <div class="row br-detaildevice br-update-device">
                                    <form method="POST" action="/system/taikhoan/capnhat/{{$user->id}}">
                                        @csrf
                                        <div class="col-12 form-data" >
                                            <div class="detail-device">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="title-detailthietbi">
                                                                <h4>
                                                                    Thông tin thiết bị
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <ul class="system-taikhoan">
                                                                        <li class="update-device">
                                                                            <span>Họ tên:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="hoten" value="{{$user->name}}" required placeholder="Nhập họ tên">
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Số điện thoại:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="sdt" value="{{$user->phone}}" required placeholder="Nhập số điện thoại">
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Email:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="email" name="email" value="{{$user->email}}" required placeholder="Nhập email">
                                                                        </li>
                                                                        <li class="update-device dropdown-updevice">
                                                                            <span>Vai trò:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <select class="js-example-basic-single" name="role" required>
                                                                                <option selected  value="{{$user->role_id}}">{{$user->role->name}}</option>
                                                                                @foreach($roles as $role)
                                                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                        
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <ul class="system-taikhoan">
                                                                    
                                                                    <li class="update-device">
                                                                        <span>Tên đăng nhập:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <input type="text" name="name_login_device" value="{{$user->username}}" placeholder="Nhập tên đăng nhập" required>
                                                                    </li>
                                                                    <li class="update-device">
                                                                        <label class="pas">Mật khẩu *</label>
                                                                        <div  id="show_hide_password">
                                                                            <input id="password" type="password" placeholder="Mật khẩu" name="password" value="{{$user->password}}" required >
                                                                                
                                                                                <div class="input-group-addon">
                                                                                    <span toggle="#password" class="far fa-fw fa-eye field-icon toggle-password-enter"></span>
                                                                                </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="update-device">
                                                                        <label class="pas">Nhập lại mật khẩu *</label>
                                                                        <div  id="show_hide_password">
                                                                            <input id="password-field-enter" type="password" placeholder="Nhập lại mật khẩu" name="password_enter"  value="{{$user->password}}" required >
                                                                                
                                                                                <div class="input-group-addon">
                                                                                    <span toggle="#password-field-enter" class="far fa-fw fa-eye field-icon toggle-password-enter"></span>
                                                                                </div>
                                                                        </div>
                                                                        @if(session()->has('errorconfirmpas'))
                                                                                <div class="alert alert-danger">
                                                                                    {{ session()->get('errorconfirmpas') }}
                                                                                </div>
                                                                                @endif
                                                                    </li>
                                                                    <li class="update-device dropdown-updevice">
                                                                        <span>Tình trạng:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <select class="js-example-basic-single" name="status" required>
                                                                                @if($user->status == '1')
                                                                                    <option selected value="1">Hoạt động</option>
                                                                                @else
                                                                                    <option value="1">Hoạt động</option>

                                                                                @endif
                                                                                
                                                                                @if($user->status == '0')
                                                                            
                                                                                    <option selected value="0">Ngưng hoạt động</option>
                                                                                @else
                                                                                    <option  value="0">Ngưng hoạt động</option>
                                                                                @endif
                                                                        </select>
                                                                        
                                                                    </li>
                                                                </ul>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row note-updatedevice">
                                                        <span><i class="fa-solid fa-asterisk"></i> Là trường thông tin bắt buộc</span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-submit">
                                            <button type="button" class="btn-huy" onclick="window.location='./system/taikhoan'" >Hủy bỏ</button>
                                            <button type="submit" class="btn-update">Cập nhật    tài khoản</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <div class="row">
                                
                            </div>
                    </div>
            </div>
            
@endsection