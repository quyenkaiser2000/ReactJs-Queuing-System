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
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Danh sách thiết bị</li>
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
                                        <span>Danh sách thiết bị</span>
                                    </div>
                                </div>
                                    

                            </div>
                            <div class="row">
                                <div class="col-11 search">
                                    <div class="status">
                                        <div class="action">
                                            <label for="">Trạng thái hoạt động</label>
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
                                        <div class="connect">
                                            <label for="">Trạng thái kết nối</label>
                                            <div class="wrapper-connect">
                                                <div class="jumbotron">  
                                                    <label class="drop">
                                                    <input type="checkbox" id="target-drop-example1"> 
                                                    <span class="control">Tất cả</span> 

                                                    <ul class="drop-items-connect">
                                                        <li class="item-drop">
                                                        <a target="_blank"
                                                            href="">Tất cả</a></li>
                                                        <li class="item-drop">
                                                        <a target="_blank"
                                                            href="">Kết nối</a></li>
                                                        <li class="item-drop">
                                                        <a target="_blank"
                                                            href="">Mất kết nối</a></li>
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
                            
                            <div class="row ">
                                    <div class="col-11 table-thietbi">
                                        <table class="table table-striped table-class">
                                        
                                            <thead>
                                                <tr>
                                                    <th>Mã thiết bị</th>
                                                    <th>Tên thiết bị</th>
                                                    <th>Địa chỉ IP</th>
                                                    <th>Trạng thái hoạt động</th>
                                                    <th>Trạng thái kết nối</th>
                                                    <th>Dịch vụ sử dụng</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    @foreach ($devices as $device)
                                                        <tr>
                                                            <td>{{$device->code_device}}</td>
                                                            <td>{{$device->name}}</td>
                                                            <td>{{$device->ip}}</td>
                                                            @if($device->status_action == '1')
                                                                <td><i class="fa-solid fa-circle icon-action"></i>Hoạt động</td>
                                                            @else
                                                                <td><i class="fa-solid fa-circle icon-stop"></i>Ngưng hoạt động</td>
                                                            @endif
                                                            @if($device->status_connect == '1')
                                                                <td><i class="fa-solid fa-circle icon-action"></i>Kết nối</td>
                                                            @else
                                                                <td><i class="fa-solid fa-circle icon-stop"></i> Mất kết nối</td>
                                                            @endif
                                                            <td>Khám tim mạch</td>
                                                            <td><a href="./thietbi/chitiet/{{$device->id}}">Chi tiết</a></td>
                                                            <td><a href="./thietbi/capnhatthietbi/{{$device->id}}">Cập nhật</a></td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                        
                                                </tbody>

                                            </table>
                                            <div class="pagination-section mb-md-30 mb-sm-30">
                                                {{$devices->links()}}
                                            </div>
                                    </div>
                                    <div class=" col-1 btn-addthietbi">
                                        <button type="button" class="btn" onclick="window.location='./thietbi/themthietbi'" ><i class="fa-light fa-plus"></i>Thêm thiết bị</button>
                                    </div>

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection