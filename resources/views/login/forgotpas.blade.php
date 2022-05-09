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

    <div class="login">
            <div class="row" style="margin-right:0px !important;">
                <div class="col-md-6 login-left" >
                    <div class="logo"> 
                        <h1>
                            <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">

                        </h1>
                    </div>
                    <div class="sign-in">
                            <div class="signin-content">
                                <div class="signin-form">
                                   
                                    <form method="POST" action="reset-password/{{$token}}">



                                        @csrf
                                        <h4 class="title">Đặt lại mật khẩu</h4>
                                        <div class="form-group">
                                            <label class="pas">Mật khẩu *</label>
                                            <div  id="show_hide_password">
                                                <input id="password-field" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="input-group-addon">
                                                        <span toggle="#password-field" class="far fa-fw fa-eye field-icon toggle-password"></span>
                                                     </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="pas">Nhập lại mật khẩu *</label>
                                            <div  id="show_hide_password">
                                                <input id="password-field-enter" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="input-group-addon">
                                                        <span toggle="#password-field-enter" class="far fa-fw fa-eye field-icon toggle-password-enter"></span>
                                                     </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group form-button">
                                            <input type="submit" name="submit" id="submit" class="form-submit" value="Xác nhận"/>
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
       $(document).on('click','.toggle-password-enter',function(){
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