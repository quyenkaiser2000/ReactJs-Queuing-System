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
    
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Main CSS -->
	<link href="front/style.css" rel="stylesheet">

    <title>Login</title>
</head>
<body>

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 login-left" >
                    <div class="logo"> 
                        <h1>
                            <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">

                        </h1>
                    </div>
                    <div class="sign-in">
                        <div class="container">
                            <div class="signin-content">
                                <div class="signin-form">
                                   
                                    <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">



                                        @csrf

                                        <div class="form-group">
                                        <label class="username">Tên đăng nhập *</label>
                                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>


                                        <div class="form-group">
                                            <label class="pas">Mật khẩu *</label>
                                            <div  id="show_hide_password">
                                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="input-group-addon">
                                                        <a href=""><img src="{{asset('/storage/pathimg/Vector.png')}}" alt=""></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a class="Forgot_password" href="">Quên mật khẩu?</a>
                                            
                                        </div>
                                        <div class="form-group form-button">
                                            <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                            <div class="banner-login">
                                <h2>
                                    <img src="{{asset('/storage/pathimg/Group341.png')}}" alt="">
                                </h2>
                            </div>
                            <div class="name-project">
                                <h3> Hệ thống </h3>
                                <h1> Quản lý xếp hàng</h1>
                            </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
</body>
</html>