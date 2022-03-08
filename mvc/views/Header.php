<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../Lets_Travel/public/css/main.css">
    <link rel="stylesheet" href="../../../Lets_Travel/public/js/main.js">

</head>

<body>
    <div class="container-fluid header">
        <div class="container">
            <div class="row header__nav">
                <div class="col-3 nav__logo">
                    <img src="../../../Lets_Travel/public/image/logo-gotravel.jpg" alt="">
                </div>
                <div class="col-6 nav__search">
                    <form action="">
                        <input type="text"></input>
                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="col-3 nav__user">
                    <div class="account">
                        <a href="#">
                            <button class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </button>
                            <div>Tài khoản</div>

                            <div class="sub__account">
                                <ul>
                                    <li>Đăng kí</li>

                                    <li>Đăng nhập</li>
                                </ul>
                            </div>
                        </a>

                    </div>
                    <div class="shopping">
                        <a href="#">
                            <button class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </button>
                            <div>Giỏ hàng</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid header__menu">
            <ul class="container">
                <li><a href="http://localhost/Lets_Travel/Home">TRANG CHỦ</a></li>
                <li>
                    <a href="http://localhost/Lets_Travel/Tour/National">
                        TOUR DU LỊCH
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown__tour">
                        <ul>
                            <li>Tour yêu thích
                                <ul>
                                    <a href="#"><li>Sapa</li></a>
                                    <a href="#"><li>Hà Nội</li></a>
                                    <a href="#"><li>Du thuyền Voyager</li></a>
                                    <a href="#"><li>Thừa Thiên Huế</li></a>
                                    <a href="#"><li>Hạ Long</li></a>
                                    <a href="#"><li>Hàn Quốc - Nhật Bản</li></a>
                                    <a href="#"><li>Đà Lạt</li></a>
                                    <a href="#"><li>Phú Quốc - Hà Tiên</li></a>
                                </ul>
                            </li>
                            <li>Tour trong nước
                                <ul>
                                    <a href="#"><li>Bắc Bộ</li></a>
                                    <a href="#"><li>Tây Bắc Bộ</li></a>
                                    <a href="#"><li>Đông Bắc Bộ</li>
                                    <a href="#"><li>Trung Bộ</li></a>
                                    <a href="#"><li>Nam Trung Bộ</li></a>
                                    <a href="#"><li>Nam Bộ</li></a>
                                    <a href="#"><li>Đông Nam Bộ</li></a>
                                    <a href="#"><li>Tây Nam Bộ</li></a>

                                </ul>
                            </li>
                            <li>Tour quốc tế
                                <ul>
                                    <a href="#"><li>Bắc Á</li></a>
                                    <a href="#"><li>Đông Nam Á</li></a>
                                    <a href="#"><li>Châu Úc</li></a>
                                    <a href="#"><li>Đông Âu</li></a>
                                    <a href="#"><li>Tây Âu</li></a>
                                    <a href="#"><li>Châu Phi</li></a>
                                    <a href="#"><li>Bắc Mỹ</li></a>
                                    <a href="#"><li>Nam Mỹ</li></a>
                                    <a href="#"><li></li></a>
                                </ul>
                            </li>
                            <li>Tour Khuyến mãi
                                <ul>
                                    <a href="#"><li>Sapa - Hà Nội</li></a>
                                    <a href="#"><li>Cố đô Huế</li></a>
                                    <a href="#"><li>Nha Trang</li></a>
                                    <a href="#"><li>Hội An - Đà Nẵng</li></a>
                                    <a href="#"><li>Hạ Long</li></a>
                                    <a href="#"><li>Ninh Thuận</li></a>
                                    <a href="#"><li>Đà Lạt</li></a>
                                    <a href="#"><li>Phú Quốc - Hà Tiên</li></a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="http://localhost/Lets_Travel/Tour/Discount">TOUR KHUYẾN MÃI</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="http://localhost/Lets_Travel/Library">THƯ VIỆN</a></li>
                <li><a href="http://localhost/Lets_Travel/Blog">BLOG</a></li>
                <li style="border-right: 0px"><a href="http://localhost/Lets_Travel/Contact">LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>
</body>

</html>