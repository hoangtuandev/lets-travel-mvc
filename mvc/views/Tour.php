<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
</head>

<body>
    <div class="tour__page">
        <div class="container">
        <div class="row">
            <div class="col-3" style="padding: 0px;">
                <div class="catalogy__tour">
                    <ul>
                        <li style="color: #0064b6; font-size:20px;font-weight:bold;border:0px;">DANH MỤC</li>
                        <a href="http://localhost/Lets_Travel/Tour/Favorite">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                </svg>
                                Tour yêu thích
                            </li>
                        </a>
                        <a href="http://localhost/Lets_Travel/Tour/National">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                </svg>
                                Tour trong nước
                            </li>
                        </a>
                        <a href="http://localhost/Lets_Travel/Tour/International">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                </svg>
                                Tour quốc tế
                            </li>
                        </a>
                        <a href="http://localhost/Lets_Travel/Tour/Discount">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                </svg>
                                Tour khuyến mãi
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-9" style="padding:0px">
                <?php
                    require_once "../Lets_Travel/mvc/views/pages/".$data['page'].".php" ;
                ?>
            </div>
        </div>
        </div>
    </div>
</body>

</html>