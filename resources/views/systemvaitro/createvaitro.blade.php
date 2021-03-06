@extends('systemvaitro.master')
@section('title','Thêm vai trò')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Cài đặt hệ thống</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./system/vaitro">Quản lý vai trò</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Thêm vai trò</li>
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
                                        <span>Quản lý vai trò</span>
                                    </div>
                                </div>
                                    

                            </div>
                            
                            
                            <div class="row br-detaildevice br-update-device">
                                <form method="POST" action="/system/vaitro/themvaitro">
                                        @csrf
                                        <div class="col-12 form-data" >
                                            <div class="detail-device">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="title-detailthietbi">
                                                                <h4>
                                                                    Thông tin vai trò
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
                                                                            <span>Tên vai trò:<i class="fa-solid fa-asterisk"></i></span>
                                                                            <input type="text" name="name_role" value="" required>
                                                                        </li>
                                                                        <li class="update-device">
                                                                            <span>Mô tả:</span>
                                                                            <textarea rows="" cols="" name="decription" class="decription_role"></textarea>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row note-updatedevice">
                                                                <span><i class="fa-solid fa-asterisk"></i> Là trường thông tin bắt buộc</span>
                                                            </div>
                                                        
                                                        </div>

                                                        <div class="col-6 textarea-service">
                                                            <div class="row" style="width:100%;">
                                                                <span class="title-chucnang">Phân quyền chức năng:<i class="fa-solid fa-asterisk icon-chucnang"></i></span>
                                                            </div>
                                                            <div class="row" style="width:100%;">
                                                                <div class="br-chucnang">
                                                                    <div>
                                                                        <label for="" class="title-nhomchucnang">Nhóm chức năng thiết bị</label>
                                                                        <ul>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Xem thiết bị" type="checkbox" value="Xem thiết bị" id="xemthietbi">
                                                                                <label class="form-check-label lable-chucnang" for="xemthietbi">
                                                                                    Xem thiết bị
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Thêm thiết bị" type="checkbox" value="Thêm thiết bị" id="themthietbi">
                                                                                <label class="form-check-label lable-chucnang" for="themthietbi">
                                                                                    Thêm thiết bị
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Cập nhật thiết bị" type="checkbox" value="Cập nhật thiết bị" id="capnhatthietbi">
                                                                                <label class="form-check-label lable-chucnang" for="capnhatthietbi">
                                                                                    Cập nhật thiết bị
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <label for="" class="title-nhomchucnang">Nhóm chức năng dịch vụ</label>
                                                                        <ul>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Xem dịch vụ" type="checkbox" value="Xem dịch vụ" id="xemdichvu">
                                                                                <label class="form-check-label lable-chucnang" for="xemdichvu">
                                                                                Xem dịch vụ
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Cập nhật dịch vụ" type="checkbox" value="Cập nhật dịch vụ" id="capnhatdichvu">
                                                                                <label class="form-check-label lable-chucnang" for="capnhatdichvu">
                                                                                Cập nhật dịch vụ
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Thêm dịch vụ" type="checkbox" value="Thêm dịch vụ" id="themdichvu">
                                                                                <label class="form-check-label lable-chucnang" for="themdichvu">
                                                                                Thêm dịch vụ
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <label for="" class="title-nhomchucnang">Nhóm chức năng Cấp số</label>
                                                                        <ul>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Cấp số" type="checkbox" value="Cấp số" id="capso">
                                                                                <label class="form-check-label lable-chucnang" for="capso">
                                                                                    Cấp số
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Xem chi tiết cấp số" type="checkbox" value="Xem chi tiết cấp số" id="xemchitietcapso">
                                                                                <label class="form-check-label lable-chucnang" for="xemchitietcapso">
                                                                                    Xem chi tiết cấp số
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <label for="" class="title-nhomchucnang">Nhóm chức năng báo cáo</label>
                                                                        <ul>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Báo cáo" type="checkbox" value="Báo cáo" id="baocao">
                                                                                <label class="form-check-label lable-chucnang" for="baocao">
                                                                                Báo cáo
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <label for="" class="title-nhomchucnang">Nhóm chức năng quản lý hệ thống</label>
                                                                        <ul>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Quản lý vai trò" type="checkbox" value="Quản lý vai trò" id="quanlyvaitro">
                                                                                <label class="form-check-label lable-chucnang" for="quanlyvaitro">
                                                                                Quản lý vai trò
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang" name="Quản lý tài khoản" type="checkbox" value="Quản lý tài khoản" id="quanlytaikhoan">
                                                                                <label class="form-check-label lable-chucnang" for="quanlytaikhoan">
                                                                                Quản lý tài khoản
                                                                                </label>
                                                                            </li>
                                                                            <li class="form-check">
                                                                                <input class="form-check-input checkbox-chucnang"  name="Quản lý người dùng" type="checkbox" value="Quản lý người dùng" id="quanlynguoidung">
                                                                                <label class="form-check-label lable-chucnang" for="quanlynguoidung">
                                                                                Quản lý người dùng
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                            </div>
                                        </div>
                                        <div class="col-12 form-submit">
                                            <button type="button" class="btn-huy" onclick="window.location='./system/vaitro'">Hủy bỏ</button>
                                            <button type="submit" class="btn-update">Thêm</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <div class="row">
                                
                            </div>
                    </div>
            </div>
            
@endsection