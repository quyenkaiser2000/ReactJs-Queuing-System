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
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./thietbi">Danh sách cấp số</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Chi tiết</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="">
                                    <div class="profile-mini">
                                        <span class="fa fa-solid fa-bell icon-bell click-notification"> </span>
                                        <div class="img-profile-mini" onclick="window.location='/myprofile'">
                                            <img   src="https://scontent.fsgn5-11.fna.fbcdn.net/v/t39.30808-6/279563282_3338149473073471_6135922759493358654_n.jpg?_nc_cat=103&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=B-TucuA8lqQAX_NGZI6&_nc_ht=scontent.fsgn5-11.fna&oh=00_AT_TQW2bmOayZkjYLKLQz9LD99aLrrwEk6o5nrKJUC35Mw&oe=6286F6A8" alt="">
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
                                                <span>Nguyễn Lê Long</span>
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
                                                                    <li><span>Nguyễn Thị Dung</span></li>
                                                                    <li><span>Khám tim mạch</span></li>
                                                                    <li><span>2001201</span></li>
                                                                    <li><span>14:35 - 07/11/2021</span></li>
                                                                    <li><span>18:00 - 07/11/2021</span></li>
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
                                                                    <li><span>Địa chỉ Email::</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-8">
                                                                <ul>
                                                                    <li><span>Kiosk</span></li>
                                                                    <li><span>Đang chờ</span></li>
                                                                    <li><span>0948523623</span></li>
                                                                    <li><span>nguyendung@gmail.com</span></li>
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