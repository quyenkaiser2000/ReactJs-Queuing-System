@extends('capso.master')
@section('title','Cấp số')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Cấp số</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./capso">Danh sách cấp số</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Chi tiết</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="">
                                    <div class="profile-mini">
                                        <span class="fa fa-solid fa-bell icon-bell click-notification"> </span>
                                        <div class="img-profile-mini" onclick="window.location='/myprofile'">
                                            <img   src="{{asset('/storage/pathimg/'.Auth::user()->avatar)}}" alt="">
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
                                        <span>Thông tin cấp số</span>
                                    </div>
                                </div>
                                    

                            </div>
                            
                            
                            <div class="row br-detaildevice">
                                    <div class="col-11">
                                        <div class="detail-device">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="title-detailthietbi">
                                                            <h4>
                                                                Thông tin cấp số
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <ul>
                                                                    <li><span>Họ tên:</span></li>
                                                                    <li><span>Tên dịch vụ:</span></li>
                                                                    <li><span>Số thứ tự:</span></li>
                                                                    <li><span>Thời gian cấp:</span></li>
                                                                    <li><span>hạn sử dụng:</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-8">
                                                                <ul>
                                                                    <li><span>{{$numberlevel->user->name}}</span></li>
                                                                    <li><span>{{$numberlevel->service->name}}</span></li>
                                                                    <li><span>{{$numberlevel->stt}}</span></li>
                                                                    <li><span>{{$numberlevel->start_day}}</span></li>
                                                                    <li><span>{{$numberlevel->end_day}}</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                       
                                                       
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <ul>
                                                                    <li><span>Nguồn cấp:</span></li>
                                                                    <li><span>Trạng thái:</span></li>
                                                                    <li><span>Số điện thoại:</span></li>
                                                                    <li><span>Địa chỉ Email:</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-8">
                                                                <ul>
                                                                    <li><span>{{$numberlevel->nguoncap}}</span></li>
                                                                    @if($numberlevel->status == '1')
                                                                        <li><span><i class="fa-solid fa-circle icon-wait"></i>Đang chờ</span></li>
                                                                    @endif
                                                                    @if($numberlevel->status == '2')
                                                                        <li><span><i class="fa-solid fa-circle icon-dasudung"></i>Đã sử dụng</span></li>
                                                                    @endif
                                                                    @if($numberlevel->status == '3')
                                                                        <li><span><i class="fa-solid fa-circle icon-stop"></i>Bỏ qua</span></li>
                                                                    @endif
                                                                    <li><span>{{$numberlevel->user->phone}}</span></li>
                                                                    <li><span>{{$numberlevel->user->email}}</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        </div>
                                    </div>
                                    <div class=" col-1 btn-editthietbi">
                                        <button type="button" class="btn" onclick="window.location='./capso'"><i class="fa-solid fa-arrow-left-long"></i></i>Quay lại</button>
                                    </div>
                        
                                </div>

                            </div>
                    </div>
            </div>
            
            
@endsection