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
                                                <span>Nguyễn Lê Long</span>
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
                                            <form>
                                            <div class="col-12">
                                                <div class="title-capso">
                                                    <span>CẤP SỐ MỚI</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="action" >
                                                        <label for="" class="title-inso">Dịch vụ khách hàng lựa chọn</label>
                                                        <div class="wrapper-action">
                                                            <div class="jumbotron">  
                                                                <label class="drop">
                                                                <input type="checkbox" id="target-drop-example2"> 
                                                                <span class="control">Chọn dịch vụ</span> 

                                                                <ul class="drop-items-action">
                                                                    <li class="item-drop">
                                                                    <a target="_blank"
                                                                        href="">Khám tim mạch</a></li>
                                                                    <li class="item-drop">
                                                                    <a target="_blank"
                                                                        href="">Khám tai mũi họng</a></li>
                                                                    <li class="item-drop">
                                                                    <a target="_blank"
                                                                        href="">Khám răng hàm mặt</a></li>
                                                                </ul>

                                                                <label for="target-drop-example" class="overlay-close"></label>

                                                                </label>   

                                                            </div>

                                                            
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-12 form-submit">
                                                <button type="button" class="btn-huy">Hủy bỏ</button>
                                                <button type="button" class="btn-update">In số</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                    </div>
            </div>
            <div class="test" id="test" >
                <span><i class="fa-solid fa-xmark exit-inso" id=""></i></span>
                <span>Số thứ tự được cấp</span>
                <span>2001201</span>
                <span>DV: Khám răng hàm mặt <span class="capso-quay">(tại quầy số 1)</span></span>
                <div class="time-capso">
                    <span>Thời gian cấp: 09:30 11/10/2021</span>
                    <span>Hạn sử dụng:: 17:30 11/10/2021</span>
                </div>
            </div>
            
@endsection