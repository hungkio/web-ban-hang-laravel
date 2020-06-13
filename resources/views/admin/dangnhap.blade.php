<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $title ?? '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
    <div class="wrapper">
        <div class="content-wrapper pb-5">
            <section class="content">
                <div class="container-fluid">
                    <div class="coverFormLogin">
                        <form method="post" class="formLogin" id="formLogin">
                            <input type="hidden" name="action" value="loginAdmin">
                            <h2>Đăng nhập</h2>
                            <!-- <img src="image/logo11.png" alt="GoldBridge" class="logoLogin" />  -->
                            <div class="boxForm">
                                <!-- <img src="image/userLogin.jpg" class="iconLogin" /> -->
                                <input type="text" placeholder="Tên tài khoản..." class="txtLogin" name="accountLogin" required/>
                            </div>
                            <div class="boxForm">
                                <!-- <img src="image/passLogin.jpg" class="iconLogin" /> -->
                                <input type="password" value="" placeholder="Mật khẩu" class="txtLogin" name="passwordLogin" required/>
                            </div>
                            <div class="rowForm">
                                <input type="checkbox" class="ckbForm" name="remember"/><label>Duy trì đăng nhập</label>
                            </div>
                            <button type="submit" class="btnLogin" value="1" name="btnLogin">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>



