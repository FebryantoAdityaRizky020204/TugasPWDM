<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPINETA | DETAIL</title>
    <link rel="stylesheet" href="./../styles/styles.css">
    <link rel="stylesheet" href="./../styles/detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./.../../assets/bootstrap/css/bootstrap.min.css">

    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="nav pages">
        <div class="container-logo">
            <a href="./index.php">
                <h3>Spineta<span></span></h3>
            </a>
        </div>

        
        <div class="auth-btn-container">

            <ul class="nav-list">
                <li class="list-item">
                    <a href="./index.php">Home</a>
                </li>
                <li class="list-item">
                    <a href="./room.php">Room</a>
                </li>
                <li class="list-item">
                    <a href="./user/cek-pesanan.php">Cek Pesanan</a>
                </li>
            </ul>
            
            <a class="auth-btn masuk" href="./auth/login.php">MASUK</a>
            <a class="auth-btn daftar" href="./auth/register.php">DAFTAR</a>

            <a class="auth-btn" href="./user/profile.php">USER</a>
        </div>
    </nav>

    <div class="container">
        <div class="detail-header">
            <h2>STANDARD ROOM</h2>
        </div>

        <div class="col-12 detail-container">
            <div class="row m-0">
                <div class="row g-5 m-0 p-0">
                    <div class="col-md-3 p-1">
                        <div class="detail-room">
                            <div class="detail-imgcard">
                                <img src="./../assets/image/standard-room.jpg" alt="standard-room">
                            </div>
                            <div class="detail-desc">
                                <p>20m<sup>2</sup></p>
                                <p>
                                    AC | 
                                    Free Wi-Fi
                                </p>
                            </div>
                        </div>
                        <a class="back" href="./room.php"><< BACK TO ROOM</a>
                    </div>

                    <div class="col-md-9">
                        <div class="row">

                            <div class="col-md-12 room-card-item">
                                <div class="row g-0 flex-md-row">
                                    <div class="card-header">
                                        <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                        <h4>Kamar Standar Single Bed</h4>
                                        <p class="header-earn">Tidak Bisa Refund & Reschedule</p>
                                    </div>

                                    <div class="row col-12 g-2">
                                        <div class="col-6">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/user-shape.png" alt="user">
                                                    </span>
                                                    1 Tamu
                                                </li>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/cutlery.png" alt="sarapan">
                                                    </span>
                                                    Sarapan Tidak Tersedia
                                                </li>
                                                <li>
                                                    <span>
                                                        <img src="./../assets/icon/bed.png" alt="bed" width="15px">
                                                    </span>
                                                    1 Single Bed
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="room-book">
                                                <div class="price">
                                                    IDR 500.000
                                                </div>
                                                <div class="price-txt">
                                                    /kamar/malam
                                                </div>
                                                <a class="book-btn" href="./booking.php">BOOKING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 room-card-item">
                                <div class="row g-0 flex-md-row">
                                    <div class="card-header">
                                        <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                        <h4>Kamar Standar Single Bed <span class="addon">+ Sarapan</span></h4>
                                        <p class="header-earn">Tidak Bisa Refund & Reschedule</p>
                                    </div>

                                    <div class="row col-12 g-2">
                                        <div class="col-6">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/user-shape.png" alt="user">
                                                    </span>
                                                    1 Tamu
                                                </li>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/cutlery.png" alt="sarapan">
                                                    </span>
                                                    Sarapan Tersedia (1 pax)
                                                </li>
                                                <li>
                                                    <span>
                                                        <img src="./../assets/icon/bed.png" alt="bed" width="15px">
                                                    </span>
                                                    1 Single Bed
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="room-book">
                                                <div class="price">
                                                    IDR 550.000
                                                </div>
                                                <div class="price-txt">
                                                    /kamar/malam
                                                </div>
                                                <a class="book-btn" href="javascript:void(0)">BOOKING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 room-card-item">
                                <div class="row g-0 flex-md-row">
                                    <div class="card-header">
                                        <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                        <h4>Kamar Standar Double Bed</h4>
                                        <p class="header-earn">Tidak Bisa Refund & Reschedule</p>
                                    </div>

                                    <div class="row col-12 g-2">
                                        <div class="col-6">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/user-shape.png" alt="user">
                                                    </span>
                                                    2 Tamu
                                                </li>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/cutlery.png" alt="sarapan">
                                                    </span>
                                                    Sarapan Tidak Tersedia
                                                </li>
                                                <li>
                                                    <span>
                                                        <img src="./../assets/icon/bed.png" alt="bed" width="15px">
                                                    </span>
                                                    2 Single Bed
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="room-book">
                                                <div class="price">
                                                    IDR 680.000
                                                </div>
                                                <div class="price-txt">
                                                    /kamar/malam
                                                </div>
                                                <a class="book-btn" href="javascript:void(0)">BOOKING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 room-card-item">
                                <div class="row g-0 flex-md-row">
                                    <div class="card-header">
                                        <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                        <h4>Kamar Standar Double Bed <span class="addon">+ Sarapan</span></h4>
                                        <p class="header-earn">Tidak Bisa Refund & Reschedule</p>
                                    </div>

                                    <div class="row col-12 g-2">
                                        <div class="col-6">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/user-shape.png" alt="user">
                                                    </span>
                                                    2 Tamu
                                                </li>
                                                <li>
                                                    <span>
                                                        <img width="15px" src="./../assets/icon/cutlery.png" alt="sarapan">
                                                    </span>
                                                    Sarapan Tersedia (2 pax)
                                                </li>
                                                <li>
                                                    <span>
                                                        <img src="./../assets/icon/bed.png" alt="bed" width="15px">
                                                    </span>
                                                    2 Single Bed
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="room-book">
                                                <div class="price">
                                                    IDR 780.000
                                                </div>
                                                <div class="price-txt">
                                                    /kamar/malam
                                                </div>
                                                <a class="book-btn" href="javascript:void(0)">BOOKING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <?php include_once './components/footer.php'; ?>