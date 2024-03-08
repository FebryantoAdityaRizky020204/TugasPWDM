<?php 
    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION['login_admin'])) header('Location: ./login.php');
    $dataAdmin = $_SESSION['data_admin'];

    require_once './../app/Connection.php';
    require_once './../app/admin/AdminFunction.php';

    $ap = new AdminFunction();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | ROOM</title>
    <link rel="stylesheet" href="./../styles/admin-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="container-xxl p-0 the-container">
        <div class="nav">
            <div class="logo">
                ADMINPAGE
            </div>
            <div class="left">
                <?= $_SESSION['data_admin']['nama_admin'] ?> |
                <span class="uppr"><?= $_SESSION['data_admin']['role'] ?></span>
            </div>
        </div>
        <div class="col-12 func">
            <div class="option-container">
                <ul class="list">
                    <li class="list-item">
                        <a href="./index.php">
                            <img src="./../assets/icon/dashboard.png" alt="dashboard"> Dashboard
                        </a>
                    </li>
                    <li class="list-item">
                        <a  href="./hotel.php">
                        <i class="fa-solid fa-hotel"></i> Hotel
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="./kategori.php">
                            <img src="./../assets/icon/kategori.png" alt="kategori"> Kategori
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="./booking.php" class="active">
                            <img src="./../assets/icon/avatar.png" alt="avatar"> Booking
                        </a>
                    </li>
                </ul>

                <span class="merge-nav"></span>

                <ul class="list">
                    <li class="list-item">
                        <a href="./profile.php">
                            <i class="fa-solid fa-user-tie"> </i> Admin Profile
                        </a>
                    </li>
                </ul>


                <a href="./operation.php?option=logout" class="goto-user">
                    LOGOUT
                    <img src="./../assets/icon/redirect-right.png" alt="redirect">
                </a>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="content-title">
                        BOOKING | SPINETA HOTEL
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-5 left">
                                <div class="checkin-card my-card">
                                    <div class="checkin-title">
                                        TAMBAH KATEGORI
                                    </div>
                                    <div class="form-container">
                                        <form method="post" action="./operation.php">
                                            <div class="input-container">
                                                <input type="text" name="nama_room" id="nama_room" required autocomplete="off">
                                                <label for="nama_room">
                                                    Nama Room
                                                </label>
                                            </div>
                                            <div class="input-container">
                                                <input type="number" name="jumlah_kamar" id="jumlah_kamar" required>
                                                <label for="jumlah_kamar">
                                                    Jumlah Kamar
                                                </label>
                                            </div>
                                            <button type="submit" name="tambahRoom" class="form-btn">TAMBAH</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="my-card">
                                    <div class="list-user-title">
                                        LIST KATEOGRI
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    


    <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>