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
                                        <span>Quản lý thiết bị</span>
                                    </div>
                                </div>
                                    

                            </div>
                            
                            
                            <div class="row br-detaildevice br-update-device">
                                    <form>
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
                                                                            <input type="text" name="ma_device" value="KIO_01">
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Tên thiết bị:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="name_device" value="Kiosk">
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Địa chỉ IP:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="ma_device" value="128.172.308">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                        
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <ul>
                                                                    <li class="update-device">
                                                                        <div class="action">
                                                                            <label for="">Trạng thái hoạt động</label>
                                                                            <div class="wrapper-action">
                                                                                <div class="jumbotron">  
                                                                                    <label class="drop">
                                                                                        <input type="checkbox" id="target-drop-example2"> 
                                                                                        <span class="control">Tất cả</span> 

                                                                                        <ul class="drop-items-action">
                                                                                            <li class="item-drop">
                                                                                            <span target="_blank"
                                                                                                href="">Tất cả</span></li>
                                                                                            <li class="item-drop">
                                                                                            <span target="_blank"
                                                                                                href="">Hoạt động</a></li>
                                                                                            <li class="item-drop">
                                                                                            <a target="_blank"
                                                                                                href="">Ngưng hoạt động</a></li>
                                                                                        </ul>

                                                                                        <label for="target-drop-example" class="overlay-close"></label>

                                                                                    </label>   

                                                                                </div>

                                                                                
                                                                                </div>
                                                                        </div>
                                                                        
                                                                    </li>
                                                                    <li class="update-device">
                                                                        <span>Tên đăng nhập:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <input type="text" name="name_device" value="Linhkyo011">
                                                                    </li>
                                                                    <li class="update-device">
                                                                        <span>Mật khẩu:<i class="fa-solid fa-asterisk"></i></span>
                                                                        <input type="text" name="ma_device" value="CMS">
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
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row note-updatedevice">
                                                        <span><i class="fa-solid fa-asterisk"></i> Là trường thông tin bắt buộc</span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-submit">
                                            <button type="button" class="btn-huy">Hủy bỏ</button>
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