<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/dff14b3591.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><!-- Main CSS -->
	<link href="front/style.css" rel="stylesheet">

</head>
<body>
    <div class="left-sidebar">
        <div class="row" style="margin-right: 0px !important;margin-left: 0px !important;height:100%;">
            <div class="" style="width:200px;background: #fff;">
                    <div class="panel ">
                            <div class="logo">
                                <h1>
                                <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">
                                </h1>
                            </div>
                            <ul>
                                <li>
                                    <a class="active" href="{{'/dashboard'}}" aria-expanded="false">
                                        <span class="hide-menu">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/thietbi'}}" aria-expanded="false">
                                        <span class="hide-menu">Thiết bị</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/dichvu'}}" aria-expanded="false">
                                        <span class="hide-menu">Dịch vụ</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/capso'}}" aria-expanded="false">
                                        <span class="hide-menu">Cấp số</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/baocao'}}" aria-expanded="false">
                                        <span class="hide-menu">Báo cáo</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/hethong'}}" aria-expanded="false">
                                        <span class="hide-menu">Cài đặt hệ thống</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <form class="logout" action="/logout-user" method="POST" >
                                @csrf
                                <button type="submit" class="btn btn-danger btn-logout"><img class="img-logout" src="{{asset('/storage/pathimg/logout.png')}}" alt="">Đăng Xuất</button>
                            </form>
                    </div>
            </div>
            <div class="col-7 br-dashboard">
                    <div class="content">
                        <div class="container"> 
                            <div class="row" style="justify-content: space-between;">
                                    <div class="title">
                                        <span>Dashboard</span>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="title-chart-capso">
                                        <span>Biểu đồ cấp số</span>
                                    </div>

                            </div>
                            <div class="row chiso">
                                <div class="dacap">
                                    <div>
                                        <i class="far fa-regular fa-calendar icon"></i>
                                        <span class="content">Số thứ tự đã cấp</span>
                                    </div>
                                    <div>
                                        <span class="number">4.221</span>
                                        <span class="number-phantram" ><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                    
                                </div>
                                <div class="dasudung">
                                    <div>
                                        <i class="far fa-regular fa-calendar-check icon"></i>
                                        <span class="content">Số thứ tự đã sử dụng</span>
                                    </div>
                                    <div>
                                        <span class="number">4.221</span>
                                        <span class="number-phantram"><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                    
                                </div>
                                <div class="dangcho">
                                    <div>
                                        <i class="fa fa-light fa-phone icon"></i>
                                        <span class="content">Số thứ tự đang chờ</span>
                                    </div>
                                    <div>
                                        <span class="number">4.221</span>
                                        <span class="number-phantram"><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                   
                                </div>
                                <div class="boqua">
                                    <div>
                                        <i class="fa fa-light fa-phone icon"></i>
                                        <span class="content">Số thứ tự đã bỏ qua</span>
                                    </div>
                                    <div>
                                        <span class="number">4.221</span>
                                        <span class="number-phantram"><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="row chart-area">
                                <div class="title">
                                    <div>
                                        <h4>
                                            Bảng thống kê theo ngày
                                        </h4>
                                        <span>Tháng 11/2021</span>
                                    </div>
                                    <div>
                                        <form action="">
                                            <div class="choose-day">
                                                <span class="select-title">Xem theo:</span>
                                                <select name="show" onchange="this.form.submit();">
                                                    <option  value="day" {{ request('show') == '6' ? 'selected' : ''}}>Ngày</option>
                                                    <option value="week" {{ request('show') == '9' ? 'selected' : ''}}>Tuần</option>
                                                    <option value="month" {{ request('show') == '12' ? 'selected' : ''}}>Tháng</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="chart-area">

                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="" style="width:400px;">
                <div class="br">
                    <div class="content">
                        <div class="container"> 
                            <div class="row" style="margin-left:90px;">
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
                            <div class="row title-tongquan">
                                <h4>Tổng quan</h4>  

                            </div>
                            <div class="row br-chart-cicle">
                                <div class="chart-cicle">
                                    <div id="chart-radial-device">

                                    </div>
                                    <div class="chart-solieu">
                                        <h4>4.221</h4>
                                        <span><i class="fa fa-light fa-desktop"></i>Thiết bị</span>
                                    </div>
                                    <div class="chart-status">
                                        <span><i class="fa fa-duotone fa-circle"></i>Đang hoạt động</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Ngưng hoạt động</span>
                                    </div>
                                    <div class="chart-solieuchitiet">
                                        <span>210</span>
                                        <span>66</span>
                                    </div>
                                </div>

                            </div>
                            <div class="row  br-chart-cicle">
                                <div class="chart-cicle">
                                    <div id="chart-radial-service">

                                    </div>
                                    <div class="chart-solieu">
                                        <h4>4.221</h4>
                                        <span><i class="fa fa-light fa-desktop"></i>Dịch vụ</span>
                                    </div>
                                    <div class="chart-status">
                                        <span><i class="fa fa-duotone fa-circle"></i>Đang hoạt động</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Ngưng hoạt động</span>
                                    </div>
                                    <div class="chart-solieuchitiet">
                                        <span>210</span>
                                        <span>66</span>
                                    </div>
                                </div>

                            </div>
                            <div class="row br-chart-cicle ">
                                <div class="chart-cicle">
                                    <div id="chart-radial-capso">

                                    </div>
                                    <div class="chart-solieu">
                                        <h4>4.221</h4>
                                        <span><i class="fa fa-light fa-desktop"></i>Cấp số</span>
                                    </div>
                                    <div class="chart-status">
                                        <span><i class="fa fa-duotone fa-circle"></i>Đang hoạt động</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Ngưng hoạt động</span>
                                    </div>
                                    <div class="chart-solieuchitiet">
                                        <span>210</span>
                                        <span>66</span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>

    $(document).on('click','.click-notification',function(){
        
        var element = document.getElementById("notification");
        element.classList.add("show");
        element.classList.remove("hide");

    });
    document.addEventListener('mouseup', function(e) {
    var element = document.getElementById('notification');
    if (!element.contains(e.target)) {
        element.classList.add("hide");
        element.classList.remove("show");
    }
    });


    var options = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100,102,69,85,141,155]
        
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11","12"]},
        tooltip: {
          x: {
            format: 'dd/MM/yy'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart-area"), options);
        chart.render();

    var options = {
        series: [44, 55],
        chart: {
        height: 130,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
        dataLabels: {
            name: {
            fontSize: '14px',
            
            },
            value: {
                
            fontSize: '14px',
            },
            total: {
            show: true,
            label: 'Total',
            formatter: function (w) {
                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                return 249
            }
            }
        }
        }
    },
    labels: ['Apples', 'Oranges'],
    };

    var chart = new ApexCharts(document.querySelector("#chart-radial-device"), options);
    chart.render();
    
    
    var options = {
        series: [44, 55],
        chart: {
        height: 130,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
        dataLabels: {
            name: {
            fontSize: '14px',
            },
            value: {
            fontSize: '14px',
            },
            total: {
            show: true,
            label: 'Total',
            formatter: function (w) {
                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                return 249
            }
            }
        }
        }
    },
    labels: ['Apples', 'Oranges'],
    };

    var chart = new ApexCharts(document.querySelector("#chart-radial-service"), options);
    chart.render();
    

    var options = {
        series: [44, 55, 67],
        chart: {
        height: 130,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
        dataLabels: {
            name: {
            fontSize: '14px',
            },
            value: {
            fontSize: '14px',
            },
            total: {
            show: true,
            label: 'Total',
            formatter: function (w) {
                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                return 249
            }
            }
        }
        }
    },
    labels: ['Apples', 'Oranges', 'Bananas'],
    };

    var chart = new ApexCharts(document.querySelector("#chart-radial-capso"), options);
    chart.render();
</script>
</html>