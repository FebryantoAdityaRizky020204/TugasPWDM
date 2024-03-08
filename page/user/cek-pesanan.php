<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPINETA | ROOM</title>
    <link rel="stylesheet" href="./../../styles/styles.css">
    <link rel="stylesheet" href="./../../styles/cekPesanan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../assets/bootstrap/css/bootstrap.min.css">

    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <nav class="nav pages">
        <div class="container-logo">
            <a href="./../index.php">
                <h3>Spineta<span></span></h3>
            </a>
        </div>
        
        <div class="auth-btn-container">

            <ul class="nav-list">
                <li class="list-item">
                    <a href="./../index.php">Home</a>
                </li>
                <li class="list-item">
                    <a href="./../room.php">Room</a>
                </li>
                <li class="list-item">
                    <a class="active" href="./../user/cek-pesanan.php">Cek Pesanan</a>
                </li>
            </ul>
            
            <a class="auth-btn masuk" href="./../auth/login.php">MASUK</a>
            <a class="auth-btn daftar" href="./../auth/register.php">DAFTAR</a>

            <a class="auth-btn" href="./../user/profile.php">USER</a>
        </div>
    </nav>

    <div class="container-xxl">
        <div class="p-room-header">
            <h3 class="m-0">PESANAN ANDA</h3>
        </div>

        <div class="container-xxl">
            <div class="row">
                    <div class="col-md-12">
                        <div class="row pesanan-container">

                            <div class="col-md-6 section">
                                <div class="section-title">
                                    <h5>Pesanan Aktif</h5>
                                </div>
                                <div class="pesanan-card row">
                                    <div class="pesanan-color"></div>
                                    <div class="col-7">
                                        <h4>SSB298367</h4>
                                        <p>Standard Single Bed</p>
                                        <h6>John Doe</h6>
                                        <p>john-doe@gmail.com</p>
                                    </div>
                                    <div class="col-5">
                                        <div class="row m-0 flex-center">
                                            <div class="start-date date">
                                                25-02 <br />
                                                2024
                                            </div>
                                            <div class="count-day">
                                                <span>1 Malam</span>
                                            </div>
                                            <div class="end-date date">
                                                28-02 <br />
                                                2024
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="price">IDR 810.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 section">
                                <div class="section-title gray">
                                    <h5>History</h5>
                                </div>
                                <div class="empty-data">
                                    History Pemesanan Kosong
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    

    <footer id="footer"  class="footer">
        <div class="container">
            <div class="footer-menu">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">Spineta</a>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <ul class="footer-menu-item">
                            <li class="scroll"><a href="./../index.php">Home</a></li>
                            <li class="scroll"><a href="./../room.php">Room</a></li>
                            <li class="scroll"><a href="./cek-pesanan.php">Cek Pesanan</a>
                            <li class="scroll"><a href="">Be Our Partner</a></li>
                            <li class="scroll"><a href="">Admin Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hm-footer-copyright">
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            &copy;copyright. Spineta Management
                        </p><!--/p-->
                    </div>
                    <div class="col-sm-7">
                        <div class="footer-social">
                            <span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
                            <a href="#"><i class="fa-brands fa-facebook"></i></i></a>	
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-google-plus-g"></i></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>

    
    <script src="./../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>