@extends('dichvu.master')
@section('title','Dịch vụ')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Dịch vụ</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Danh sách dịch vụ</li>
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
                                        <span>Quản lý dịch vụ</span>
                                    </div>
                                </div>
                                    

                            </div>
                            <div class="row">
                                <div class="col-11 search">
                                    <div class="status">
                                        <form class="action grib-search" action="">
                                                <div>
                                                    <label for="">Trạng thái hoạt động</label>
                                                    <div>
                                                        <select class="js-example-basic-single dropdown-search" name="action" onchange="this.form.submit();" required>
                                                            
                                                            <option value="2" {{ request('action') == '2' ? 'selected' : ''}}>Tất cả</option>
                                                            <option value="1" {{ request('action') == '1' ? 'selected' : ''}}>Hoạt động</option>
                                                            <option value="0" {{ request('action') == '0' ? 'selected' : ''}}>Ngưng Hoạt động</option>
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                        </form>
                                        
                                    </div>
                                    <div class="search-key">
                                        <label for="">Chọn thời gian</label>
                                        <form action="/dichvu">
                                            <input type="text" name="dates" value="{{request('dates')}}"/>
                                            <button type="submit" value="date" >
                                                <i class="fa fa-search" aria-hidden="true"></i> 
                                        </form>
                                    </div>
                                    <div class="search-key">
                                        <label for="">Từ khóa</label>
                                        <form action="/dichvu">
                                            <input 
                                                type="text" name="search" placeholder="" value="{{request('search')}}">
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
                                                    <th>Mã dịch vụ</th>
                                                    <th>Tên dịch vụ</th>
                                                    <th>Mô tả</th>
                                                    <th>Trạng thái hoạt động</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    @foreach($services as $service)
                                                        <tr>
                                                            <td>{{$service->code_service}}</td>
                                                            <td>{{$service->name}}</td>
                                                            <td>{{$service->content}}</td>
                                                            @if($service->status == '1')
                                                                <td><i class="fa-solid fa-circle icon-action"></i>Hoạt động</td>
                                                            @else
                                                                <td><i class="fa-solid fa-circle icon-stop"></i>Ngưng hoạt động</td>
                                                            @endif
                                                            <td><a href="./dichvu/chitiet/{{$service->id}}">Chi tiết</a></td>
                                                            <td><a href="./dichvu/capnhatdichvu/{{$service->id}}">Cập nhật</a></td>
                                                        </tr>
                                                    @endforeach

                                                    
                                                        
                                                </tbody>

                                            </table>
                                            <div class="pagination-section mb-md-30 mb-sm-30">
                                                {{$services->links()}}
                                            </div>
                                    </div>
                                    <div class=" col-1 btn-addthietbi">
                                        <button type="button" class="btn" onclick="window.location='./dichvu/themdichvu'" ><i class="fa-light fa-plus"></i>Thêm dịch vụ</button>
                                    </div>

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection