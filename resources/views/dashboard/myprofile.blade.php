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
        <div class="col-2" style="background: #fff;">
                <div class="panel ">
                            <div class="logo">
                                <h1>
                                <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">
                                </h1>
                            </div>
                            <ul>
                                <li>
                                    <a class="" href="{{'/dashboard'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-bars-progress icon-sidebar"></i>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/thietbi'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-desktop icon-sidebar"></i>Thi???t b???</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/dichvu'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-comments-dollar icon-sidebar"></i>D???ch v???</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/capso'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-layer-group icon-sidebar"></i>C???p s???</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/baocao'}}" aria-expanded="false">
                                        <span class="hide-menu"><i class="fa fa-light fa-chart-area icon-sidebar"></i>B??o c??o</span>
                                    </a>
                                </li>
                                <li class="system">
                                    <div class="menu-system" href="{{'/hethong'}}" aria-expanded="false">
                                        <span class="hide-menu "><i class="fa fa-light fa-arrows-to-dot icon-sidebar"></i>C??i ?????t h??? th???ng <i class="fa-solid fa-ellipsis-vertical" style="margin-left:24px;"></i></span>
                                        <div class="hover-system">
                                            <a href="system/vaitro"><span>Qu???n l?? vai tr??</span></a>
                                            <a href="system/taikhoan"><span>Qu???n l?? t??i kho???n</span></a>
                                            <a href="system/nguoidung"><span>Qu???n l?? ng?????i d??ng</span></a>
                                        </div>
                                    </div>
                                    
                                </li>
                            </ul>
                            
                            <form class="logout" action="/logout-user" method="POST" >
                                @csrf
                                <button type="submit" class="btn btn-danger btn-logout"><img class="img-logout" src="{{asset('/storage/pathimg/logout.png')}}" alt="">????ng Xu???t</button>
                            </form>
                    </div>
            </div>
            <div class="col-10">
                <div class="br">
                    <div class="content">
                        <div class="container"> 
                            <div class="row" style="justify-content: space-between;">
                                    <div class="title">
                                        <span>Th??ng tin c?? nh??n</span>
                                    </div>
                                    <div class="profile-mini">
                                        <span class="fa fa-solid fa-bell icon-bell click-notification"> </span>
                                        <div class="img-profile-mini">
                                            <img   src="{{asset('/storage/pathimg/'.$useravatar->avatar)}}" alt="">
                                            <div class="notification hide" id="notification">
                                                <span class="title-notification">Th??ng b??o</span>
                                                <ul class="content-notification">
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">
                                                            <span class="name">Ng?????i d??ng: Nguy???n Th??? Th??y Dung</span>
                                                            <span class="time">Th???i gian nh???n s???: 12h20 ng??y 30/11/2022</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="name-profile-mini">
                                                <span>Xin ch??o</span>
                                                <span>{{Auth::user()->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row detail-profile">
                                    <div class="col-3" style="margin-top:25px;">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                            <form action="myprofile/{{Auth::user()->id}}" method="post" id="form-image" enctype="multipart/form-data">
                                            @csrf
                                                <input type='file' name='avatar' data-id="{{Auth::user()->id}}" id="imageUpload" accept=".png, .jpg, .jpeg"
                                                
                                                
                                                        onchange = "this.form.submit();">
                                                
                                                
                                                <label for="imageUpload"></label>
                                            </form>
                                            </div>
                                            <div class="avatar-preview">
                                                <img class="profile-user-img img-responsive img-circle" id="imagePreview" src="{{asset('/storage/pathimg/'.$useravatar->avatar)}}" alt="User profile picture">
                                            </div>
                                        </div>
                                        <div class="name">
                                            <span>{{Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="tennguoidung">
                                            <label class="">T??n ng?????i d??ng</label>
                                            <input type="text" class="" value="{{Auth::user()->name}}" disabled="disabled">
                                        </div>
                                        <div class="tendangnhap">
                                            <label class="">T??n ??ang nh???p</label>
                                            <input type="text" class="" value="{{Auth::user()->username}}" disabled="disabled">
                                        </div>
                                        <div class="phone">
                                            <label class="">S??? ??i???n tho???i</label>
                                            <input type="text" class="" value="{{Auth::user()->phone}}" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="pas">
                                            <label class="">M???t kh???u</label>
                                            <input type="text" class="" value="123123" disabled="disabled">
                                        </div>
                                        <div class="email">
                                            <label class="">Email</label>
                                            <input type="text" class="" value="{{Auth::user()->email}}" disabled="disabled"> 
                                        </div>
                                        <div class="vaitro">
                                            <label class="">Vai tr??</label>
                                            <input type="text" class="" value="{{Auth::user()->role->name}}" disabled="disabled">
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


        $(document).ready(function(){

            $("#imageUpload").change(function(data){

            var imageFile = data.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);


            var avatar_id = $(this).data('id');
            var url = "{{route('change-avatar-user')}}";

            console.log($("#form-image").serialize());

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
               $.ajax({
                
                   url: url,
                   method:"POST",
                   data:{avatar_id:avatar_id,
                        name_avatar:$("#form-image").serialize(),
                },
                   dataType:'json',
                   success:function(data){
                        alert(data);
                        console.log(data);
                    },
                    
                });
           


            reader.onload = function(evt){
                $('#imagePreview').attr('src', evt.target.result);
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            
            });



        });

</script>
</html>