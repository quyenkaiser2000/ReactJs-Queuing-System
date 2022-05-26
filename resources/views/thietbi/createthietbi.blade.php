@extends('thietbi.master')
@section('title','Thiết bị')
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
                                    <form method="POST" action="/thietbi/themthietbi">
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
                                                                    <ul>
                                                                        <li class="update-device">
                                                                            <span>Mã thiết bị:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="ma_device" value="" required>
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Tên thiết bị:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="name_device" value="" required>
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Địa chỉ IP:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="ip_device" value="" required>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                        
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <ul>
                                                                    <li class="update-device dropdown-updevice">
                                                                        <span>Loại thiết bị:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <select class="js-example-basic-single" name="category_device" required>
                                                                            @foreach($devicecategorys as $devicecategory)
                                                                                <option>{{$devicecategory->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        
                                                                    </li>
                                                                    <li class="update-device">
                                                                        <span>Tên đăng nhập:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <input type="text" name="name_login_device" value="" required>
                                                                    </li>
                                                                    <li class="update-device">
                                                                        <span>Mật khẩu:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <input type="text" name="pas_login_device" value="" required>
                                                                    </li>
                                                                </ul>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="" class="service-use-title">Dịch vụ sử dụng:<i class="fa-solid fa-asterisk"></i></label>
                                                            
                                                        </div>
                                                        <div class="col-12">
                                                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple" required>
                                                            @foreach($services as $service)
                                                                <option>{{$service->name}}</option>
                                                            @endforeach    
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row note-updatedevice">
                                                        <span><i class="fa-solid fa-asterisk"></i> Là trường thông tin bắt buộc</span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-submit">
                                            <button type="button" class="btn-huy" onclick="window.location='./thietbi'" >Hủy bỏ</button>
                                            <button type="submit" class="btn-update">Thêm thiết bị</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <div class="row">
                                
                            </div>
                    </div>
            </div>
            
@endsection