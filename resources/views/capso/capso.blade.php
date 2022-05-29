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
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Danh sách cấp số</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="">
                                    <div class="profile-mini">
                                        <span class="fa fa-solid fa-bell icon-bell click-notification"> </span>
                                        <div class="img-profile-mini" onclick="window.location='/myprofile'">
                                            <img   src="{{asset('/storage/pathimg/'.Auth::user()->avatar)}}" alt="">
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
                                        <span>Quản lý cấp số</span>
                                    </div>
                                </div>
                                    

                            </div>
                            <div class="row">
                                <div class="col-11 search capso-search">
                                    <div class="status">
                                        <form class=" grib-search" action="">
                                                <div>
                                                    <label for="">Tên dịch vụ</label>
                                                    <div>
                                                        <select class="js-example-basic-single dropdown-search" name="service" onchange="this.form.submit();" required>
                                                            
                                                            <option value="0" {{ request('service') == '0' ? 'selected' : ''}}>Tất cả</option>
                                                            <option value="0" {{ request('service') == '0' ? 'selected' : ''}}>Tất cả</option>
                                                                @foreach($services as $service)
                                                                    <option value="{{$service->id}}" {{ request('service') == '' ? 'selected' : ''}}>{{$service->name}}</option>
                                                                @endforeach
                                                        
                                                            </select>
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="action">
                                                    <label for="">Tình trạng</label>
                                                    <div>
                                                        <select class="js-example-basic-single dropdown-search" name="status" onchange="this.form.submit();" required>
                                                            
                                                            <option value="3" {{ request('status') == '3' ? 'selected' : ''}}>Tất cả</option>
                                                            <option value="1" {{ request('status') == '1' ? 'selected' : ''}}>Đang chờ</option>
                                                            <option value="0" {{ request('status') == '0' ? 'selected' : ''}}>Đã sử dụng</option>
                                                            <option value="2" {{ request('status') == '2' ? 'selected' : ''}}>Bỏ qua</option>
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="">Nguồn cấp</label>
                                                    <div>
                                                        <select class="js-example-basic-single dropdown-search" name="nguoncap" onchange="this.form.submit();" required>
                                                            
                                                            <option value="2" {{ request('nguoncap') == '2' ? 'selected' : ''}}>Tất cả</option>
                                                            <option value="1" {{ request('nguoncap') == '1' ? 'selected' : ''}}>Kiosk</option>
                                                            <option value="0" {{ request('nguoncap') == '0' ? 'selected' : ''}}>Hệ thống</option>
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                        </form>
                                    </div>
                                    <div class="search-key">
                                        <label for="">Chọn thời gian</label>
                                        <form action="/capso">
                                            <input type="text" name="dates" value="{{request('dates')}}"/>
                                            <button type="submit" value="date" >
                                                <i class="fa fa-search" aria-hidden="true"></i> 
                                        </form>
                                    </div>
                                    <div class="search-key">
                                        <label for="">Từ khóa</label>
                                        <form action="/capso">
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
                                                    <th>STT</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Tên dịch vụ</th>
                                                    <th>Thời gian cấp</th>
                                                    <th>Hạn sử dụng</th>
                                                    <th>Trạng thái</th>
                                                    <th>Nguồn cấp</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    @foreach($numberlevels as $numberlevel)
                                                        <tr>
                                                            <td>{{$numberlevel->stt}}</td>
                                                            <td>{{$numberlevel->user->name}}</td>
                                                            <td>{{$numberlevel->service->name}}</td>
                                                            <td>{{$numberlevel->start_day}}</td>
                                                            <td>{{$numberlevel->end_day}}</td>
                                                            @if($numberlevel->status == '1')
                                                                <td><i class="fa-solid fa-circle icon-wait"></i>Đang chờ</td>
                                                            @endif
                                                            @if($numberlevel->status == '2')
                                                                <td><i class="fa-solid fa-circle icon-dasudung"></i>Đã sử dụng</td>
                                                            @endif
                                                            @if($numberlevel->status == '0')
                                                                <td><i class="fa-solid fa-circle icon-stop"></i>Bỏ qua</td>
                                                            @endif
                                                            <td>{{$numberlevel->nguoncap}}</td>
                                                            <td><a href="./capso/detailcapso/{{$numberlevel->id}}">Chi tiết</a></td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>

                                            </table>
                                            <div class="pagination-section mb-md-30 mb-sm-30">
                                                {{$numberlevels->links()}}
                                            </div>
                                    </div>
                                    <div class=" col-1 btn-addthietbi">
                                        <button type="button" class="btn" onclick="window.location='./capso/capsomoi'" ><i class="fa-light fa-plus"></i>Cấp số mới</button>
                                    </div>

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection