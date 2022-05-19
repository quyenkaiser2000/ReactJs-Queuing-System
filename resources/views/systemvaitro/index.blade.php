@extends('systemvaitro.master')
@section('title','Vai trò')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Cài đặt hệ thống</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Quản lý vai trò</li>
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
                                        <span>Quản lý vai trò</span>
                                    </div>
                                </div>
                                    

                            </div>
                            <div class="row">
                                <div class="col-11 search" style="display:block;">
                                    <div class="search-key" style="float:right;">
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
                            
                            <div class="row ">
                                    <div class="col-11 table-thietbi">
                                        <table class="table table-striped table-class">
                                        
                                            <thead>
                                                <tr>
                                                    <th>Tên vai trò</th>
                                                    <th>Số người dùng</th>
                                                    <th>Mô tả</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Kế toán</td>
                                                        <td>6</td>
                                                        <td>Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu</td>
                                                        <td><a href="./thietbi/chitiet">Chi tiết</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Bác sĩ</td>
                                                        <td>6</td>
                                                        <td>Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu</td>
                                                        <td><a href="./thietbi/chitiet">Chi tiết</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Lễ tân</td>
                                                        <td>6</td>
                                                        <td>Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu</td>
                                                        <td><a href="./thietbi/chitiet">Chi tiết</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Quản lý</td>
                                                        <td>6</td>
                                                        <td>Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu</td>
                                                        <td><a href="./thietbi/chitiet">Chi tiết</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Admin</td>
                                                        <td>6</td>
                                                        <td>Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu</td>
                                                        <td><a href="./thietbi/chitiet">Chi tiết</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Mô tả</td>
                                                        <td>6</td>
                                                        <td>Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu</td>
                                                        <td><a href="./thietbi/chitiet">Chi tiết</a></td>

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
                                    <div class=" col-1 btn-addthietbi">
                                    <button type="button" class="btn" onclick="window.location='./thietbi/themthietbi'" ><i class="fa-light fa-plus"></i>Thêm vai trò</button>
                                    </div>

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection