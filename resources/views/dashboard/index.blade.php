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
            <div class="col-2" style="">
                    <div class="panel ">
                            <div class="logo">
                                <h1>
                                <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">
                                </h1>
                            </div>
                            <ul>
                                <li>
                                    <a class="active" href="{{'/dashboard'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-bars-progress icon-sidebar"></i>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/thietbi'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-desktop icon-sidebar"></i>Thiết bị</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/dichvu'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-comments-dollar icon-sidebar"></i>Dịch vụ</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/capso'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-layer-group icon-sidebar"></i>Cấp số</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/baocao'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-chart-area icon-sidebar"></i>Báo cáo</span>
                                    </a>
                                </li>
                                <li class="system">
                                    <div class="menu-system" href="{{'/hethong'}}" aria-expanded="false">
                                        <span class="hide-menu "><i class="fa fa-light fa-arrows-to-dot icon-sidebar"></i>Cài đặt hệ thống <i class="fa-solid fa-ellipsis-vertical" style="margin-left:24px;"></i></span>
                                        <div class="hover-system">
                                            <a href="system/vaitro"><span>Quản lý vai trò</span></a>
                                            <a href="system/taikhoan"><span>Quản lý tài khoản</span></a>
                                            <a href="system/nguoidung"><span>Quản lý người dùng</span></a>
                                        </div>
                                    </div>
                                    
                                </li>
                            </ul>
                            
                            <form class="logout" action="/logout-user" method="POST" >
                                @csrf
                                <button type="submit" class="btn btn-danger btn-logout"><img class="img-logout" src="{{asset('/storage/pathimg/logout.png')}}" alt="">Đăng Xuất</button>
                            </form>
                    </div>
            </div>
            <div class="col-5 br-dashboard" style="max-width:50% !important; flex: 0 0 50% !important; ">
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
                            <div class="row chiso dashboard-chiso">
                                <div class="dacap">
                                    <div>
                                        <i class="far fa-regular fa-calendar icon"></i>
                                        <span class="content">Số thứ tự đã cấp</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$numberlevelCount}}</span>
                                        <span class="number-phantram" ><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                    
                                </div>
                                <div class="dasudung">
                                    <div>
                                        <i class="far fa-regular fa-calendar-check icon"></i>
                                        <span class="content">Số thứ tự đã sử dụng</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$numberlevelCount2}}</span>
                                        <span class="number-phantram"><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                    
                                </div>
                                <div class="dangcho">
                                    <div>
                                        <i class="fa fa-light fa-phone icon"></i>
                                        <span class="content">Số thứ tự đang chờ</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$numberlevelCount1}}</span>
                                        <span class="number-phantram"><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                   
                                </div>
                                <div class="boqua">
                                    <div>
                                        <i class="fa fa-light fa-phone icon"></i>
                                        <span class="content">Số thứ tự đã bỏ qua</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$numberlevelCount0}}</span>
                                        <span class="number-phantram"><i class="fa fa-light fa-arrow-down"></i>32.41%</span>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="row chart-area">
                                <div class="title">
                                    <div>
                                        @if(request('show') == null)
                                           <h4>
                                                Bảng thống kê theo ngày
                                            </h4> 
                                        @endif

                                        @if(request('show') == 'day')
                                            <h4>
                                                Bảng thống kê theo ngày
                                            </h4> 
                                        @endif
                                        @if(request('show') == 'week')
                                            <h4>
                                                Bảng thống kê theo tuần
                                            </h4> 
                                        @endif
                                        @if(request('show') == 'month')
                                            <h4>
                                                Bảng thống kê theo tháng
                                            </h4> 
                                        @endif
                                        
                                        
                                        <span>Tháng {{$timenowformat}}</span>
                                    </div>
                                    <div>
                                        <form action="">
                                            <div class="choose-day">
                                                <span class="select-title">Xem theo:</span>
                                                <select name="show" onchange="this.form.submit();">
                                                    <option  value="day" {{ request('show') == 'day' ? 'selected' : ''}}>Ngày</option>
                                                    <option value="week" {{ request('show') == 'week' ? 'selected' : ''}}>Tuần</option>
                                                    <option value="month" {{ request('show') == 'month' ? 'selected' : ''}}>Tháng</option>
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
            <div class="col-4" style="">
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
                                                    @foreach($numberlevels as $numberlevel)
                                                        <li>
                                                            <a href="/capso/detailcapso/{{$numberlevel->id}}">
                                                                <span class="name">Người dùng: {{$numberlevel->user->name}}</span>
                                                                <span class="time">Thời gian nhận số: {{\Carbon\Carbon::Parse($numberlevel->created_at)->format('H')}}h{{\Carbon\Carbon::Parse($numberlevel->created_at)->format('i')}} ngày {{\Carbon\Carbon::Parse($numberlevel->created_at)->format('d/m/Y')}}</span>
                                                            </a>
                                                        </li>
                                                        <hr>
                                                    @endforeach
                                                    
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
                                        <h4>{{$deviceCount}}</h4>
                                        <span><i class="fa fa-light fa-desktop"></i>Thiết bị</span>
                                    </div>
                                    <div class="chart-status">
                                        <span><i class="fa fa-duotone fa-circle"></i>Đang hoạt động</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Ngưng hoạt động</span>
                                    </div>
                                    <div class="chart-solieuchitiet">
                                        <span>{{$deviceCount1}}</span>
                                        <span>{{$deviceCount0}}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="row  br-chart-cicle">
                                <div class="chart-cicle">
                                    <div id="chart-radial-service">

                                    </div>
                                    <div class="chart-solieu">
                                        <h4>{{$serviceCount}}</h4>
                                        <span><i class="fa fa-light fa-desktop"></i>Dịch vụ</span>
                                    </div>
                                    <div class="chart-status">
                                        <span><i class="fa fa-duotone fa-circle"></i>Đang hoạt động</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Ngưng hoạt động</span>
                                    </div>
                                    <div class="chart-solieuchitiet chart-service">
                                        <span>{{$serviceCount1}}</span>
                                        <span>{{$serviceCount0}}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="row br-chart-cicle ">
                                <div class="chart-cicle">
                                    <div id="chart-radial-capso">

                                    </div>
                                    <div class="chart-solieu">
                                        <h4>{{$numberlevelCount}}</h4>
                                        <span><i class="fa fa-light fa-desktop"></i>Cấp số</span>
                                    </div>
                                    <div class="chart-status">
                                        <span><i class="fa fa-duotone fa-circle"></i>Đang chờ</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Đã sử dụng</span>
                                        <span><i class="fa fa-duotone fa-circle"></i>Bỏ qua</span>
                                    </div>
                                    <div class="chart-solieuchitiet chart-capso">
                                        <span>{{$numberlevelCount1}}</span>
                                        <span>{{$numberlevelCount2}}</span>
                                        <span>{{$numberlevelCount0}}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="container calendar-chart">
                                    
                                    <div class="calendar">
                                        <div class="info">
                                            <button class="btn btn-prev">
                                                <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                            </button>
                                            
                                            <p class="month day-ok-chart" style="margin-top: 15px;">September</p>
                                            <p class="year day-ok-chart" style="margin-top: 15px;">2020</p>
                                            <button class="btn btn-next">
                                                <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                            </button>
                                        </div>
                                        <div class="date">
                                            <div class="day-name day-ok-chart">Sun</div>
                                            <div class="day-name day-ok-chart">Mon</div>
                                            <div class="day-name day-ok-chart">Tue</div>
                                            <div class="day-name day-ok-chart">Wen</div>
                                            <div class="day-name day-ok-chart">Thu</div>
                                            <div class="day-name day-ok-chart">Fri</div>
                                            <div class="day-name day-ok-chart">Sat</div>
                                        </div>
                                        <div class="date date-container" style="margin-top:-36px;">
                                            <div class="day"></div>
                                            <div class="day"></div>
                                            <div class="day">1</div>
                                            <div class="day">2</div>
                                            <div class="day">3</div>
                                            <div class="day">4</div>
                                            <div class="day">5</div>
                                            <div class="day">6</div>
                                            <div class="day">7</div>
                                            <div class="day">8</div>
                                            <div class="day">9</div>
                                            <div class="day active">10</div>
                                            <div class="day">11</div>
                                            <div class="day">12</div>
                                            <div class="day">13</div>
                                            <div class="day">14</div>
                                            <div class="day">15</div>
                                            <div class="day">16</div>
                                            <div class="day">17</div>
                                            <div class="day">18</div>
                                            <div class="day">19</div>
                                            <div class="day">20</div>
                                            <div class="day">21</div>
                                            <div class="day">22</div>
                                            <div class="day">23</div>
                                            <div class="day">24</div>
                                            <div class="day">25</div>
                                            <div class="day">26</div>
                                            <div class="day">27</div>
                                            <div class="day">28</div>
                                            <div class="day">29</div>
                                            <div class="day">30</div>
                                            <div class="day">31</div>
                                        </div>
                                    </div>
                                    
                                </div>
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
          name: 'STT',
          data: [<?php echo $newStringtotal; ?>]
        
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
          categories: [<?php echo $newStringdate; ?>]
        },
        tooltip: {
          x: {
            format: 'dd'
          },
        },
        };
        var chart = new ApexCharts(document.querySelector("#chart-area"), options);
        chart.render();

    var options = {
        series: [<?php echo $deviceCount1; ?>, <?php echo $deviceCount0; ?>],
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
                return <?php echo $deviceCount; ?>
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
        series: [<?php echo $serviceCount1; ?>, <?php echo $serviceCount0; ?>],
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
                return <?php echo $serviceCount; ?>

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
        series: [<?php echo $numberlevelCount1; ?>, <?php echo $numberlevelCount2; ?>, <?php echo $numberlevelCount0; ?>],
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
                return <?php echo $numberlevelCount; ?>

            }
            }
        }
        }
    },
    labels: ['Apples', 'Oranges', 'Bananas'],
    };

    var chart = new ApexCharts(document.querySelector("#chart-radial-capso"), options);
    chart.render();








    let monthEle = document.querySelector('.month');
let yearEle = document.querySelector('.year');
let btnNext = document.querySelector('.btn-next');
let btnPrev = document.querySelector('.btn-prev');
let dateEle = document.querySelector('.date-container');

let currentMonth = new Date().getMonth();
let currentYear = new Date().getFullYear();

function displayInfo() {
    // Hiển thị tên tháng
    let currentMonthName = new Date(
        currentYear,
        currentMonth
    ).toLocaleString('en-us', { month: 'long' });

    monthEle.innerText = currentMonthName;

    // Hiển thị năm
    yearEle.innerText = currentYear;
    
    // Hiển thị ngày trong tháng
    renderDate();
}

// Lấy số ngày của 1 tháng
function getDaysInMonth() {
    return new Date(currentYear, currentMonth + 1, 0).getDate();
}

// Lấy ngày bắt đầu của tháng
function getStartDayInMonth() {
    return new Date(currentYear, currentMonth, 1).getDay();
}

// Active current day
function activeCurrentDay(day) {
    let day1 = new Date().toDateString();
    let day2 = new Date(currentYear, currentMonth, day).toDateString();
    return day1 == day2 ? 'active' : '';
}

// Hiển thị ngày trong tháng lên trên giao diện
function renderDate() {
    let daysInMonth = getDaysInMonth();
    let startDay = getStartDayInMonth();

    dateEle.innerHTML = '';

    for (let i = 0; i < startDay; i++) {
        dateEle.innerHTML += `
            <div class="day"></div>
        `;
    }

    for (let i = 0; i < daysInMonth; i++) {
        dateEle.innerHTML += `
            <div class="day ${activeCurrentDay(i + 1)}">${i + 1}</div>
        `;
    }
}

// Xử lý khi ấn vào nút next month
btnNext.addEventListener('click', function () {
    if (currentMonth == 11) {
        currentMonth = 0;
        currentYear++;
    } else {
        currentMonth++;
    }
    displayInfo();
});

// Xử lý khi ấn vào nút previous month
btnPrev.addEventListener('click', function () {
    if (currentMonth == 0) {
        currentMonth = 11;
        currentYear--;
    } else {
        currentMonth--;
    }
    displayInfo();
});

window.onload = displayInfo;
</script>
</html>