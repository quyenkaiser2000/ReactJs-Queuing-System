@extends('baocao.master')
@section('title','Báo cáo')
@section('body')
            <div class="col-10 br-thietbi" >
                    <div class="content">
                            <div class="row" style="justify-content: space-between;padding:0px 15px;">
                                <div class="">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb-thietbi">
                                                <li class="breadcrumb-thietbi-item ">Báo cáo</li>
                                                <li class="breadcrumb-thietbi-item active"><i class="fa-solid fa-angle-right"></i>Lập báo cáo</li>
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
                                <div class="col-11 search">
                                    <div class="search-key">
                                        <label for="">Chọn thời gian</label>
                                        <form action="/baocao">
                                            <input type="text" name="dates" value="{{request('dates')}}"/>
                                            <button type="submit" value="date" >
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
                                                    <th>Số thứ tự</th>
                                                    <th>Tên dịch vụ</th>
                                                    <th>Thời gian cấp</th>
                                                    <th>Tình trạng</th>
                                                    <th>Nguồn cấp</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    @foreach($baocaos as $baocao)
                                                        <tr>
                                                            <td>{{$baocao->stt}}</td>
                                                            <td>{{$baocao->service->name}}</td>
                                                            <td>{{$baocao->start_day}}</td>
                                                            @if($baocao->status == '1')
                                                                <td><i class="fa-solid fa-circle icon-wait"></i>Đang chờ</td>
                                                            @endif
                                                            @if($baocao->status == '2')
                                                                <td><i class="fa-solid fa-circle icon-dasudung"></i>Đã sử dụng</td>
                                                            @endif
                                                            @if($baocao->status == '0')
                                                                <td><i class="fa-solid fa-circle icon-stop"></i>Bỏ qua</td>
                                                            @endif
                                                            <td>{{$baocao->nguoncap}}</td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                        
                                                </tbody>

                                            </table>
                                            <div class="pagination-section mb-md-30 mb-sm-30">
                                                {{$baocaos->links()}}
                                            </div>
                                    </div>
                                    <div class=" col-1 btn-addthietbi">
                                        <button type="button" class="btn" ><i class="fa-solid fa-download"></i>Tải về</button>
                                    </div>

                                </div>

                            </div>
                    </div>
            </div>
            
@endsection