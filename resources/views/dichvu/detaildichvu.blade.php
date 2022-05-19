@extends('dichvu.master')
@section('title','Chi tiết dịch vụ')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Dịch vụ</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./thietbi">Danh sách dịch vụ</a></li>
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
                                        <span>Quản lý thiết bị</span>
                                    </div>
                                </div>
                                    

                            </div>
                            
                            
                            <div class="row br-detaildevice">
                                    <div class="col-11">
                                        <div class="detail-device detail-service">
                                                <div class="row " style="height:100%;">
                                                    <div class="col-4 chitiet-dichvu">
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
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <ul>
                                                                            <li><span>Mã thiết bị:</span></li>
                                                                            <li><span>Tên thiết bị:</span></li>
                                                                            <li><span>Địa chỉ IP:</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <ul>
                                                                            <li><span>KIO_01</span></li>
                                                                            <li><span>Kiosk</span></li>
                                                                            <li><span>128.172.308</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="title-detailthietbi">
                                                                    <h4>
                                                                        Qui tắc cấp số
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <ul>
                                                                            <li><span>Mã thiết bị:</span></li>
                                                                            <li><span>Tên thiết bị:</span></li>
                                                                            <li><span>Địa chỉ IP:</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <ul>
                                                                            <li><span>KIO_01</span></li>
                                                                            <li><span>Kiosk</span></li>
                                                                            <li><span>128.172.308</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span>Reset mỗi ngày</span>
                                                            <span>Ví dụ: 201-2001</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">

                                                    </div>
                                                    <div class="col-7 table-dichvu">
                                                        <div class="row">
                                                            <div class="col-11 search">
                                                                <div class="status">
                                                                    <div class="action">
                                                                        <label for="">Trạng thái</label>
                                                                        <div class="wrapper-action">
                                                                            <div class="jumbotron">  
                                                                                <label class="drop">
                                                                                <input type="checkbox" id="target-drop-example2"> 
                                                                                <span class="control">Tất cả</span> 

                                                                                <ul class="drop-items-action">
                                                                                    <li class="item-drop">
                                                                                    <a target="_blank"
                                                                                        href="">Tất cả</a></li>
                                                                                    <li class="item-drop">
                                                                                    <a target="_blank"
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
                                                                </div>
                                                                <div class="search-key">
                                                                    <label for="">Từ khóa</label>
                                                                    <form>
                                                                        <input 
                                                                                type="text" plaseholder:"search">
                                                                        </input>
                                                                        <button type="submit" value="search" >
                                                                            <i class="fa fa-search" aria-hidden="true"></i> 
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-11 table-thietbi">
                                                                <table class="table table-striped table-class">
                                                                
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Số thứ tự</th>
                                                                            <th>Trạng thái</th>
                                                                        </tr>
                                                                    </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>KIO_01</td>
                                                                                <td><i class="fa-solid fa-circle"></i>Hoạt động</td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td>KIO_01</td>
                                                                                <td><i class="fa-solid fa-circle"></i>Hoạt động</td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                            <td>KIO_01</td>
                                                                                <td><i class="fa-solid fa-circle"></i>Hoạt động</td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                            <td>KIO_01</td>
                                                                                <td><i class="fa-solid fa-circle"></i>Hoạt động</td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                            <td>KIO_01</td>
                                                                                <td><i class="fa-solid fa-circle"></i>Hoạt động</td>
                                                                                
                                                                            </tr>
                                                                        </tbody>

                                                                    </table>
                                                                    
                                                                <div class='pagination-container' >
                                                                    <nav>
                                                                        <ul class="pagination" style="float:right;">
                                                                            <li data-page="prev" >
                                                                                <span> < <span class="sr-only">(current)</span></span>
                                                                            </li>
                                                                            <li data-page="next" id="prev">
                                                                                <span> > <span class="sr-only">(current)</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                        </div>
                                    </div>
                                    <div class=" col-1 btn-editthietbi">
                                        <button type="button" class="btn" onclick="window.location='./dichvu/capnhatdichvu'"><i class="fa-solid fa-pen"></i>Cập nhật dịch vụ</button>
                                    </div>

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection