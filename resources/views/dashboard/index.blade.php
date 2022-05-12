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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><!-- Main CSS -->
	<link href="front/style.css" rel="stylesheet">

</head>
<body>
    <div class="left-sidebar">
        <div class="row" style="margin-right: 0px !important;margin-left: 0px !important;height:100%;">
            <div class="col-2">
                <div class="container">
                    <div class="panel ">
                            <div class="logo">
                                <h1>
                                <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">
                                </h1>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Thiết bị</a>
                                </li>
                                <li>
                                    <a href="#">Dịch vụ</a>
                                </li>
                                <li>
                                    <a href="#">Cấp số</a>
                                </li>
                                <li>
                                    <a href="#">Báo cáo</a>
                                </li>
                                <li>
                                    <a href="#">Cài đặt hệ thống</a>
                                </li>
                            </ul>
                            
                            <form class="logout" action="/logout-user" method="POST" >
                                @csrf
                                <button type="submit" class="btn btn-danger btn-logout"><img class="img-logout" src="{{asset('/storage/pathimg/logout.png')}}" alt="">Đăng Xuất</button>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="br">
                    <div class="content">
                        <div class="container"> 
                            <div class="row" style="justify-content: space-between;">
                                    <div class="title">
                                        <span>Thông tin cá nhân</span>
                                    </div>
                                    <div class="profile-mini">
                                        <span class="fa fa-solid fa-bell icon-bell click-notification"> </span>
                                        <div class="img-profile-mini">
                                            <img   src="https://adminlte.io/themes/AdminLTE/dist/img/user3-128x128.jpg" alt="">
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
                            <div class="row detail-profile">
                                    <div class="col-3" style="margin-top:25px;">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                            <form action="" method="post" id="form-image">
                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </form>
                                            </div>
                                            <div class="avatar-preview">
                                                <img class="profile-user-img img-responsive img-circle" id="imagePreview" src="https://scontent.fsgn5-11.fna.fbcdn.net/v/t39.30808-6/279563282_3338149473073471_6135922759493358654_n.jpg?_nc_cat=103&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=u10aq1eYwUkAX-8k_l6&_nc_ht=scontent.fsgn5-11.fna&oh=00_AT8LgeKXzHwF2YhVnGG7--LSr6itXjG8WkgtHH7F0FhowQ&oe=628107E8" alt="User profile picture">
                                            </div>
                                        </div>
                                        <div class="name">
                                            <span>Nguyễn Lê Long</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="tennguoidung">
                                            <label class="">Tên người dùng</label>
                                            <input type="text" class="" value="Nguyễn Lê Long" disabled="disabled">
                                        </div>
                                        <div class="tendangnhap">
                                            <label class="">Tên đang nhập</label>
                                            <input type="text" class="" value="lehuynhaivan01" disabled="disabled">
                                        </div>
                                        <div class="phone">
                                            <label class="">Số điện thoại</label>
                                            <input type="text" class="" value="02587413" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="pas">
                                            <label class="">Mật khẩu</label>
                                            <input type="text" class="" value="123123123" disabled="disabled">
                                        </div>
                                        <div class="email">
                                            <label class="">Email</label>
                                            <input type="text" class="" value="lehuynhaivan@gmail.com" disabled="disabled"> 
                                        </div>
                                        <div class="vaitro">
                                            <label class="">Vai trò</label>
                                            <input type="text" class="" value="Kế toán" disabled="disabled">
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
</script>
</html>