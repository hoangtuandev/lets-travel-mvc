<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
</head>  

<body>
    <div class="container-fluid registration__login__page">
        <div class="container main__registration__login">
            <div class="banner__registration__login">
                <img src="../../../../Lets_Travel/public/image/banner-registration.jpg" alt="">
            </div>
            <div class="form__registration__login">
                <form action="../../../../Lets_Travel/mvc/controllers/Registration.php" method="POST">
                    <p>ĐĂNG KÍ</p>  
                    <input name="username"  type="text" placeholder="Họ và tên"></input>
                    <input name="numberphone" type="text" placeholder="Số điện thoại"></input>
                    <input name="password" type="password" placeholder="Mật khẩu"></input>
                    <button type="submit" name="btn__top">ĐĂNG KÍ</button>
                </form>
                <a href="http://localhost/Lets_Travel/Login"> <button name="btn__bottom">ĐĂNG NHẬP</button></a>
            </div>
        </div>  
    </div>
</body>

</html>