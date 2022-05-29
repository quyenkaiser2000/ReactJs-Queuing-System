@extends('dichvu.master')
@section('title','Chi tiết dịch vụ')
@section('body')
            <div class="col-10 br-thietbi service-detail" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Dịch vụ</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i><a href="./dichvu">Danh sách dịch vụ</a></li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Chi tiết</li>
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
                                                                            <li><span>Mã dịch vụ:</span></li>
                                                                            <li><span>Tên dịch vụ:</span></li>
                                                                            <li><span>Mô tả:</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <ul>
                                                                            <li><span>{{$service->code_service}}</span></li>
                                                                            <li><span>{{$service->name}}</span></li>
                                                                            <li><span>{{$service->content}}</span></li>
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
                                                                    <div class="col-5">
                                                                        <ul>
                                                                            @if($service->up_auto == '1')
                                                                                <li><span>Tăng tự động:</span></li>
                                                                            @endif
                                                                            @if($service->prefix == '1')
                                                                                <li><span>Prefix:</span></li>
                                                                            @endif
                                                                            @if($service->surfix == '1')
                                                                                <li><span>Surfix:</span></li>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-7" style="display: contents;">
                                                                        <ul class="row" style="display: grid;">
                                                                        @if($service->up_auto == '1')
                                                                            <li><span class="number-auto-up">0001</span><span> đến </span><span class="number-auto-up">9999</span></li>
                                                                        @endif  
                                                                        @if($service->prefix == '1')
                                                                            <li><span class="number-auto-up">0001</span></li>
                                                                        @endif
                                                                        @if($service->surfix == '1')
                                                                            <li><span class="number-auto-up">0001</span></li>

                                                                        @endif

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="    display: grid;">
                                                            @if($service->reset_day == '1')
                                                                <span>Reset mỗi ngày</span>
                                                            @endif
                                                            <span style="font-weight: 400 !important;">Ví dụ: 201-2001</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">

                                                    </div>
                                                    <div class="col-7 table-dichvu table-dichvu-detail">
                                                        <div class="row">
                                                            <div class="col-12 search">
                                                                <div class="status">
                                                                    <form class="action grib-search" action="">
                                                                            <div>
                                                                                <label for="">Trạng thái</label>
                                                                                <div>
                                                                                    <select class="js-example-basic-single dropdown-search" name="action" onchange="this.form.submit();" required>
                                                                                        
                                                                                        <option value="3" {{ request('action') == '3' ? 'selected' : ''}}>Tất cả</option>
                                                                                        <option value="2" {{ request('action') == '2' ? 'selected' : ''}}>Đã hoàn thành</option>
                                                                                        <option value="1" {{ request('action') == '1' ? 'selected' : ''}}>Đã thực hiện</option>
                                                                                        <option value="0" {{ request('action') == '0' ? 'selected' : ''}}>Vắng</option>
                                                                                
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                    </form>
                                                                    
                                                                </div>
                                                                <div class="search-key">
                                                                    <label for="">Chọn thời gian</label>
                                                                    <form>
                                                                        <input type="text" name="dates" />
                                                                        <button type="submit" value="search" >
                                                                    </form>
                                                                </div>
                                                                <div class="search-key">
                                                                    <label for="">Từ khóa</label>
                                                                    <form action="/dichvu/chitiet/{{$service->id}}">
                                                                        <input 
                                                                            type="text" name="search" placeholder="" value="{{request('search')}}">
                                                                        </input>
                                                                        <button type="submit" value="search" >
                                                                            <i class="fa fa-search" aria-hidden="true"></i>     
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 table-thietbi">
                                                                <table class="table table-striped table-class">
                                                                
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Số thứ tự</th>
                                                                            <th>Trạng thái</th>
                                                                        </tr>
                                                                    </thead>
                                                                        <tbody>
                                                                            @foreach($numberlevels as $numberlevel)
                                                                                <tr>
                                                                                        <td>{{$numberlevel->stt}}</td>
                                                                                        @if($numberlevel->status == '1')
                                                                                            <td><i class="fa-solid fa-circle icon-thuchien"></i>Đang thực hiện</td>
                                                                                        
                                                                                        @endif
                                                                                        @if($numberlevel->status == '2')
                                                                                            <td><i class="fa-solid fa-circle icon-action"></i>Đã hoàn thành</td>

                                                                                        @endif

                                                                                        @if($numberlevel->status == '0')
                                                                                            <td><i class="fa-solid fa-circle icon-vang"></i>Vắng</td>

                                                                                        @endif

                                                                                    
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>

                                                                    </table>
                                                                    
                                                                    <div class="pagination-section mb-md-30 mb-sm-30">
                                                                        {{$numberlevels->links()}}
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                        </div>
                                    </div>
                                    <div class=" col-1 btn-editthietbi">
                                        <button type="button" class="btn" style="    margin-top: 15px;" onclick="window.location='./dichvu/capnhatdichvu/{{$service->id}}'"><i class="fa-solid fa-pen"></i>Cập nhật dịch vụ</button>
                                        <button type="button" class="btn" onclick="window.location='./dichvu'"><i class="fa-solid fa-left-long"></i>Quay lại</button>
                                    </div>
                                    

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection