<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPINETA | BOOKING</title>
    <link rel="stylesheet" href="./../styles/styles.css">
    <link rel="stylesheet" href="./../styles/booking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">

    
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
        <div class="booking-header">
            <h3>Booking Kamar</h3>
            <span class="room-type">Standard Single Bed</span>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-8 g-2">
                    <div class="form-container">
                        <form action="0" method="post">
                            <div class="col-12 section">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <input type="date" name="checkInDate" id="checkInDate" required>
                                            <label for="checkInDate">
                                                Tanggal Check-In
                                            </label>
                                        </div>
                                    </div>
                
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <input type="date" name="checkOutDate" id="checkOutDate" required>
                                            <label for="checkOutDate">
                                                Tanggal Check-Out
                                            </label>
                                        </div>
                                    </div>
                
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <input type="number" name="checkInDate" id="checkInDate" required>
                                            <label for="checkInDate">
                                                Jumlah Kamar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-12 section">
                                <div class="col-12">
                                    <div class="section-head">
                                        <h5>Data Pemesan</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col">
                                        <div class="input-container">
                                            <input type="text" name="name" id="name" required>
                                            <label for="name">
                                                Nama Lengkap
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col">
                                        <div class="input-container">
                                            <input type="email" name="email" id="email" required>
                                            <label for="email">
                                                Email
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col">
                                        <div class="input-container">
                                            <input type="number" name="numberPhone" id="numberPhone" required>
                                            <label for="numberPhone">
                                                No Handphone
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
            
                            <div class="col-12 section">
                                <div class="section-head">
                                    <h3>Rincian Booking</h3>
                                    <p>Pembayaran Dilakukan Saat Check-In</p>
                                </div>
                                <div class="col-12">
                                    <div class="row list">
                                        <div class="col-md-6 pay-desc">
                                            <h6>Harga Kamar</h6>
                                            <p>(1x) Kamar Standard Single (1 malam)</p>
                                        </div>
                                        <div class="col-md-6 price">
                                            IDR 560.000
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <div class="row list">
                                        <div class="col-md-6 pay-desc">
                                            <h6>Pajak dan Biaya</h6>
                                            <p>PPN 11%</p>
                                        </div>
                                        <div class="col-md-6 price">
                                            IDR 250.000
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <div class="row list total">
                                        <div class="col-md-6 pay-desc">
                                            <h4>Harga Total</h4>
                                        </div>
                                        <div class="col-md-6 price">
                                            IDR 810.000
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <button type="submit" value="submit" class="booking-btn">
                                        BOOKING
                                    </button>
                                </div>
            
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
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
                </div>
            </div>
        </div>
    </div>



    <?php include_once './components/footer.php'; ?>