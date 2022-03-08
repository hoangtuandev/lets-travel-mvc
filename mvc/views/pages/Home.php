<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

</head>

<body>
    <div class="container-fluid home__page">
        <!-- BANNER -->
        <div class="banner">
            <div class="banner__video">
                <video autoplay muted loop id="myVideo" src="../../../../Lets_Travel/public/image/video-banner.mp4"></video>
            </div>
            <div class="container banner__book__tour">
                <p id="text__book__1">Đặt Tour du lịch</p>
                <p id="text__book__2">Hơn 300 tours ở Việt Nam và Quốc tế</p>
                <form action="">
                    <!-- <input id="input__book__1" type="text" placeholder="Loại hình Tour du lịch"> -->
                    <select name="" id="input__book__1">
                        <option value="">Chọn loại hình Tour</option>
                        <option value="">Tour trong nước</option>
                        <option value="">Tour quốc tế</option>
                    </select>
                    <!-- </input> --> <br>
                    <input id="input__book__2" type="text" placeholder="Nơi bạn muốn đến ?"></input>
                    <button class="btn btn-danger" type="text">TÌM</button>
                </form>
            </div>
        </div>
        <!-- MAIN -->
        <div class="container-fluid home__tour">

            <!-- TOUR TRONG NUOC -->
            <div class="container tour__domestic"><br>
                <div class="title__tour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span>TOUR TRONG NƯỚC</span>
                </div>
                <br>
                <div class="list__tours">
                    <ul>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-phu-quoc-1.jpg" alt="">
                                <div>
                                    <span class="journey">Phú Quốc - Bãi Sao - Vinpearl</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 3 ngày 2 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 2 hàng tuần</span>
                                    <span class="price__tour">5.500.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-can-tho.png" alt="">
                                <div>
                                    <span class="journey">Cần Thơ - Châu Đốc - Hà Tiên</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 3 ngày 2 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 5 hàng tuần</span>
                                    <span class="price__tour">3.600.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-da-lat.jpg" alt="">
                                <div>
                                    <span class="journey">Đà Lạt</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 2 ngày 1 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 6 hàng tuần</span>
                                    <span class="price__tour">3.900.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                    </ul>
                    <br>
                    <ul>
                        <li class="tour__item">
                            <img src="../../../../Lets_Travel/public/image/tour-vung-tau.jpg" alt="">
                            <div>
                                <span class="journey">Bà Rịa - Vũng Tàu</span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 4 ngày 3 đêm</span>
                                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 3 hàng tuần</span>
                                <span class="price__tour">5.000.000đ
                                    <button class="">Đặt Tour</button>
                                </span>
                            </div>
                        </li>
                        <li class="tour__item">
                            <img src="../../../../Lets_Travel/public/image/tour-hue.jpg" alt="">
                            <div>
                                <span class="journey">Cố đô Huế</span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 3 ngày 2 đêm</span>
                                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 2 hàng tuần</span>
                                <span class="price__tour">4.800.000đ
                                    <button class="">Đặt Tour</button>
                                </span>
                            </div>
                        </li>
                        <li class="tour__item">
                            <img src="../../../../Lets_Travel/public/image/tour-hoi-an.jpg" alt="">
                            <div>
                                <span class="journey">Hội An - Đà Nẵng</span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 5 ngày 4 đêm</span>
                                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 2 hàng tuần</span>
                                <span class="price__tour">5.500.000đ
                                    <button class="">Đặt Tour</button>
                                </span>
                            </div>
                        </li>

                    </ul>
                    <br>
                    <div class="btn__see__all__tour"><button>Xem tất cả Tour</button></div><br>
                    <hr>
                    <br>
                </div>
            </div>

            <!-- TOUR NUOC NGOAI -->
            <div class="container tour__foreign">
                <div class="title__tour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span>TOUR NƯỚC NGOÀI</span>
                </div>
                <br>
                <div class="list__tours">
                    <ul>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-du-thuyen.jpg" alt="">
                                <div>
                                    <span class="journey">Du thuyền Voyager - Singapore</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 4 ngày 3 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 7 hàng tuần</span>
                                    <span class="price__tour">25.900.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/favourite-han-quoc.jpg" alt="">
                                <div>
                                    <span class="journey">Hàn Quốc - Nhật Bản</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 7 ngày 6 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 2 hàng tuần</span>
                                    <span class="price__tour">39.900.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-ha-lan.jpg" alt="">
                                <div>
                                    <span class="journey">Hà Lan - Bỉ - Pháp</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 10 ngày 9 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 5 hàng tuần</span>
                                    <span class="price__tour">85.000.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                    </ul>
                    <br>
                    <ul>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/favourite-kim-tu-thap.jpg" alt="">
                                <div>
                                    <span class="journey">Ai Cập Kim Tự Tháp - Bảo Tàng</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 6 ngày 5 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành thứ 4 hàng tuần</span>
                                    <span class="price__tour">69.000.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-las-vegas.jpg" alt="">
                                <div>
                                    <span class="journey">Mỹ Los Angeles - Las Vegas</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 4 ngày 3 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành từ thứ 6 hàng tuần</span>
                                    <span class="price__tour">59.000.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li class="tour__item">
                                <img src="../../../../Lets_Travel/public/image/tour-canada.jpg" alt="">
                                <div>
                                    <span class="journey">Canada - Mexico - Cuba</span>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian: 10 ngày 9 đêm</span>
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Khởi hành từ thứ 2 hàng tuần</span>
                                    <span class="price__tour">99.000.000đ
                                        <button class="">Đặt Tour</button>
                                    </span>
                                </div>
                            </li>
                        </a>

                    </ul>
                    <br>
                    <div class="btn__see__all__tour"><button>Xem tất cả Tour</button></div><br>
                    <hr>
                    <br>
                </div>
            </div>
            <div class="container tour__favourite">
                <div class="title__tour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span>ĐIỂM ĐẾN YÊU THÍCH</span>
                </div> <br>
                <div class="tour__favourite__top">
                    <ul>
                        <li class="img__top__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-vinh-ha-long.jpg" alt="">
                                <div class="name__favourite">
                                    VỊNH HẠ LONG <br>
                                    <span style="font-size: 12px;">Đã có <span class="passengers__favourite">1100+</span> lượt khách</span>
                                </div>
                            </a>
                        </li>
                        <li class="img__top__favourite">
                            <a href="#"><img src="../../../../Lets_Travel/public/image/favourite-hoi-an.jpg" alt="">
                                <div class="name__favourite">
                                    HỘI AN <br>
                                    <span style="font-size: 12px;">Đã có <span class="passengers__favourite">1200+</span> lượt khách</span>
                                </div>
                            </a>
                        </li>
                        <li class="img__top__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-phu-quoc.jpg" alt="">
                                <div class="name__favourite">
                                    PHÚ QUỐC <br>
                                    <span style="font-size: 12px;">Đã có <span class="passengers__favourite">1200+</span> lượt khách</span>
                                </div>
                            </a>
                        </li>
                        <li class="img__top__favourite">
                            <a href="#"><img src="../../../../Lets_Travel/public/image/favourite-da-lat.jpg" alt="">
                                <div class="name__favourite">
                                    ĐÀ LẠT <br>
                                    <span style="font-size: 12px;">Đã có <span class="passengers__favourite">1200+</span> lượt khách</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="tour__favourite__bottom">
                    <ul>
                        <li class="img__bottom__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-van-li-truong-thanh.jpg" alt="">
                                <div class="name__favourite">CHÂU Á <br>
                                    <span class="discover__now">
                                        Khám phá ngay <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                        <li class="img__bottom__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-toa-nha-trang.jpg" alt="">
                                <div class="name__favourite">CHÂU MỸ <br>
                                    <span class="discover__now">
                                        Khám phá ngay <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                        <li class="img__bottom__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-kim-tu-thap.jpg" alt="">
                                <div class="name__favourite">CHÂU PHI <br>
                                    <span class="discover__now">
                                        Khám phá ngay <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                        <li class="img__bottom__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-thap-effen-2.jpg" alt="">
                                <div class="name__favourite">CHÂU ÂU <br>
                                    <span class="discover__now">
                                        Khám phá ngay <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                        <li class="img__bottom__favourite">
                            <a href="#">
                                <img src="../../../../Lets_Travel/public/image/favourite-australia.jpg" alt="">
                                <div class="name__favourite">CHÂU ÚC <br>
                                    <span class="discover__now">
                                        Khám phá ngay <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><br>

            <!-- CAM HUNG DU LICH -->
            <div class=" container inspired__travel">
                <hr>
                <div class="title__tour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span>CẢM HỨNG DU LỊCH</span>
                </div> <br>
                <div class="main__inspired__travel">
                    <ul>
                        <a href="#">
                            <li class="inspired__item">
                                <img src="../../../../Lets_Travel/public/image/cau-rong-da-nang-3.jpg" alt="">
                                <p class="title__inspired">Cẩm nang du lịch Đà Nẵng một ngày cho hội bạn vui chơi “sập” Đà thành</p>
                                <div class="source__inspired">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg> 1/2/2020
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg> Phạm Hoàng Tuấn
                                    </div>

                                </div>
                                <p class="introduce__inspired">
                                    Đà Nẵng có cả núi, đồng bằng và biển, chỉ nằm cách Hội An 30 km. Bao quanh bởi hàng loạt điểm tham quan du lịch...
                                </p>
                            </li>
                        </a>
                        <a href="#">
                            <li class="inspired__item">
                                <img src="../../../../Lets_Travel/public/image/blog-duong-sat-1.jpg" alt="">
                                <p class="title__inspired">6 hành trình đường sắt vĩ đại nhất thế giới</p>
                                <div class="source__inspired">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg> 1/2/2020
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg> Phạm Hoàng Tuấn
                                    </div>

                                </div>
                                <p class="introduce__inspired">
                                    Từ Australia đến Mỹ, 6 hành trình đường sắt vĩ đại nhất thế giới đã được giới thiệu trong cuốn sách “Slow Trains To Venice”.
                                </p>
                            </li>
                        </a>
                        
                            <a href="#">
                                <li class="inspired__item">
                                    <img src="../../../../Lets_Travel/public/image/blog-da-lat-1.jpg" alt="">
                                    <p class="title__inspired">Bí quyết du lịch Đà Lạt tự túc giá rẻ để xách túi và đi ngay không cần suy nghĩ</p>
                                    <div class="source__inspired">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                            </svg> 1/2/2020
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                            </svg> Phạm Hoàng Tuấn
                                        </div>

                                    </div>
                                    <p class="introduce__inspired">
                                        Thành phố ngàn hoa Đà Lạt luôn đón lượng khách đông đảo vào mọi mùa, mọi ngày trong năm, nằm trong top đầu ...
                                    </p>
                                </li>
                            </a>
                       
                    </ul>
                    <br>
                    <ul>
                        <a href="#">
                            <li class="inspired__item">
                                <img src="../../../../Lets_Travel/public/image/inspired-2.jpg" alt="">
                                <p class="title__inspired">Vạn vật phía Bắc bừng tỉnh trong xuân mới, đi đâu để “mở hàng” năm mới thật may mắn ?</p>
                                <div class="source__inspired">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg> 1/2/2020
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg> Phạm Hoàng Tuấn
                                    </div>

                                </div>
                                <p class="introduce__inspired">
                                    Tiết trời đông giá chuyển dần sang sắc xuân bừng tỉnh, tươi non trong nắng ấm báo hiệu một năm mới lại sang. Không có gì tuyệt hơn là...
                                </p>
                            </li>
                        </a>
                        <a href="#">
                            <li class="inspired__item">
                                <img src="../../../../Lets_Travel/public/image/blog-mat-biet.jpg" alt="">
                                <p class="title__inspired">Vẻ đẹp nơi đồng quê làm bối cảnh phim ‘Mắt biếc’</p>
                                <div class="source__inspired">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg> 1/2/2020
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg> Phạm Hoàng Tuấn
                                    </div>

                                </div>
                                <p class="introduce__inspired">
                                    Cây vông đồng này được gọi là cây cô đơn “Mắt Biếc”, nơi ghi hình cảnh Ngạn đánh đàn cho Hà Lan...
                                </p>
                            </li>
                        </a>
                        <a href="#">
                            <li class="inspired__item">
                                <img src="../../../../Lets_Travel/public/image/blog-luan-don.jpg" alt="">
                                <p class="title__inspired">Những điều không nên làm tại Thành phố sương mù London</p>
                                <div class="source__inspired">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg> 1/2/2020
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg> Phạm Hoàng Tuấn
                                    </div>

                                </div>
                                <p class="introduce__inspired">
                                    London là một thành phố vận hành bởi những quy định và luật lệ. Dưới đây là một số lưu ý giúp bạn không bị phạt hay phạm luật khi đến đây....
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
                <br>
            </div>
        </div>
    </div>

</body>

</html>