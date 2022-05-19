@extends('dichvu.master')
@section('title','Cập nhật dịch vụ')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Dịch vụ</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./dichvu">Danh sách dịch vụ</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./dichvu/chitiet">Chi tiết</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="">Cập nhật</a></li>



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
                                        <span>Quản lý dịch vụ</span>
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
                                                                    Thông tin dịch vụ
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
                                                                            <span>Mã dịch vụ:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="ma_service" value="201">
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Tên dịch vụ:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="name_service" value="Khám tim mạch">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                        
                                                        </div>
                                                        <div class="col-6 textarea-service">
                                                            <div class="row" style="width:100%;">
                                                                <ul>
                                                                    <li class="update-device">
                                                                        <span>Mô tả:</span>
                                                                        <textarea rows="" cols=""></textarea>
                                                                    </li>
                                                                </ul>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-12">
                                                            <div class="title-detailthietbi">
                                                                <h4>
                                                                    Quy tắc cấp số
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row quitac-capso-service">
                                                        <div class="col-2">
                                                            <div class="checkbox-capsovervice">
                                                                <input type="checkbox" id="up-auto" name="up-auto" value="">
                                                                <label for="up-auto">Tăng tự động từ:</label>
                                                            </div>
                                                            <div class="checkbox-capsovervice">
                                                                <input type="checkbox" id="prefix" name="prefix" value="">
                                                                <label for="prefix">Prefix::</label>
                                                            </div>
                                                            <div class="checkbox-capsovervice">
                                                                <input type="checkbox" id="surfix" name="surfix" value="">
                                                                <label for="surfix">Surfix:</label>
                                                            </div>
                                                            
                                                            
                                                            
                                                           
                                                        </div>
                                                        <div class="col-4 div_number">
                                                            <label for="up-auto"><span class="number-auto-up">0001</span><span> đến </span><span class="number-auto-up">9999</span></label>
                                                            <label for="prefix"><span class="number-auto-up">0001</span> </label>
                                                            <label for="surfix"><span class="number-auto-up">0001</span> </label>
                                                        </div>
 
                                                    </div>
                                                    <div class="row quitac-capso-service">
                                                            <div class="col-12 checkbox-capsovervice">
                                                                <input type="checkbox" id="reset-day" name="reset-day" value="">
                                                                <label for="reset-day">Reset mỗi ngày:</label>
                                                            </div>
                                                    </div>
                                                    <div class="row note-updatedevice">
                                                        <span><i class="fa-solid fa-asterisk"></i> Là trường thông tin bắt buộc</span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-submit">
                                            <button type="button" class="btn-huy">Hủy bỏ</button>
                                            <button type="submit" class="btn-update">Cập nhật</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <div class="row">
                                
                            </div>
                    </div>
            </div>
            
@endsection