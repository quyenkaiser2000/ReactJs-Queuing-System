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

    <title>Login</title>
</head>
<body>

    <div class="email">
            <div class="row" style="margin-right:0px !important;">
                <div class="col-md-6 email-left" >
                    <div class="logo"> 
                        <h1>
                            <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">

                        </h1>
                    </div>
                    <div class="enter-email">
                            <div class="email-content">
                                <div class="email-form">
                                
                                <form method="POST" action="{{ route('sendMail') }}">



                                        @csrf

                                        <div class="form-group">
                                        
                                            <h4 class="title">Đặt lại mật khẩu</h4>
                                            <label class="content">Vui lòng nhập email để đặt lại mật khẩu của bạn *</label>
                                            @if(session()->has('message'))
                                            <p class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </p>
                                        @endif
                                            <input id="email" type="email" class="form-control" name="email"  required >

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        
                                        <div class="form-group form-button button">
                                            <input type="button" onclick="window.location='./'" name="cancel" id="cancel" class="form-submit" value="Hủy"/>
                                            <input type="submit" name="continue" id="continue" class="form-submit" value="Tiếp tục"/>

                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                            <div class="row" style="margin-right:0px !important;">
                                <div class="col-md-12">
                                    <div class="banner-email">
                                        <h2>
                                            <img src="{{asset('/storage/pathimg/Frame.png')}}" alt="">
                                        </h2>
                                    </div>
                            
                                </div>
                                

                            </div>
                </div>
                
            </div>
            

    </div>
    
    <script>
       
       $(document).on('click','.toggle-password',function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
            input.attr("type", "password");
            }
       });
   </script>
</body>
</html>