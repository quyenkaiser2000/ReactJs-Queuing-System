@extends('capso.master')
@section('title','Cấp số mới')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Cấp số</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./capso">Danh sách cấp số</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Cấp số mới</li>
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
                                                    <hr>W
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
                                        <span>Quản lý cấp số</span>
                                    </div>
                                </div>
                                    

                            </div>
                            
                            
                            <div class="row br-detaildevice br-update-device In-so">
                                    <div class="col-12">
                                        <div class="form-inso">
                                            <form method="POST" action="capso/capsomoi">
                                                @csrf
                                                <div class="col-12">
                                                    <div class="title-capso">
                                                        <span>CẤP SỐ MỚI</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                            <label for="" class="title-inso">Dịch vụ khách hàng lựa chọn</label>
                                                            <select class="js-example-basic-single select" name="category_device" required>
                                                                @foreach($services as $service)
                                                                    <option>{{$service->name}}</option>
                                                                @endforeach
                                                            </select>
                                                </div>
                                                <div class="col-12 form-submit">
                                                    <button type="button" class="btn-huy" onclick="window.location='./capso'">Hủy bỏ</button>
                                                    <button type="submit" class="btn-update">In số</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                    </div>
            </div>
            @if($numberlevel != null)
                <div class="test" id="test" >
                    <span><i class="fa-solid fa-xmark exit-inso" id=""></i></span>
                    <span>Số thứ tự được cấp</span>
                    <span>{{$numberlevel->stt}}</span>
                    <span>DV: {{$numberlevel->service->name}} <span class="capso-quay">(tại quầy số 1)</span></span>
                    <div class="time-capso">
                        <span>Thời gian cấp: {{$numberlevel->start_day}}</span>
                        <span>Hạn sử dụng:: {{$numberlevel->end_day}}</span>
                    </div>
                </div>
            
            @endif
            
@endsection