<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $title ?? '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
<div class="dangnhap">
    <div class="wrapper">
        <div class="content-wrapper pb-5">
            <section class="content">
                <div class="container-fluid">
                    <div class="coverFormLogin">
                        <form method="post" class="formLogin" id="formLogin">
                            @csrf
                            <input type="hidden" name="action" value="loginAdmin">
                            <div>
                            <img src="images/Login.png" alt="Chuyên đề 2" class="logoLogin" /> 

                            </div>
                            <DIV>
                            <h2>Đăng nhập</h2>
                            </DIV>
                           

                            <div class="boxForm">
                                <!-- <img src="image/userLogin.jpg" class="iconLogin" /> -->
                                <input type="text" placeholder="Tên tài khoản..." class="txtLogin" name="username" required/>
                            </div>
                            <div class="boxForm">
                                <!-- <img src="image/passLogin.jpg" class="iconLogin" /> -->
                                <input type="password" value="" placeholder="Mật khẩu" class="txtLogin" name="password" required/>
                            </div>
                            <div class="boxForm">
                                <div class="error-login">
                                @if ( Session::has('error') )
                                    <strong class="col-6 error-val">{{ Session::get('error') }}</strong>
                                @endif
                                @error('email')
                                    <strong class="col-6 error-val" >{{ $message }}</strong>
                                @enderror
                            </div>
                            </div>

                            <button type="submit" class="btnLogin">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
    
</body>
</html>



