<?php 
    require_once './../app/Connection.php';
    require_once './../app/user/UserFunction.php';

    $uf = new UserFunction();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPINETA | HOME</title>
    <meta name="description" content="Website Untuk Tugas Mata Kuliah PWDM">
    <link rel="stylesheet" href="./../styles/styles.css">
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
                    <a class="active" href="./index.php">Home</a>
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


    <div class="main">
        <div class="banner">
            <div class="banner-content">
                <h2>Cari Hotel Terbaik Untuk Anda</h2>
                <p>Dapatkan Pelayanan dan Fasilitas Lengkap dengan Harga Terbaik</p>
            </div>
        </div>

        <div class="container-xxl">

            <div class="container">
                <div class="room-header">
                    <div class="col-lg-6">
                        <h1 class="">Our Popular hOTEL</h1>
                        <p class="">Temukan Kamar Terbaik Bagi Anda, kami menyediakan N Kategori Kamar Yang Bisa Anda Pilih.</p>
                    </div>
                </div>
                
                <div class="row mb-2">
                    <?php
                        $hotel = $uf->getTwoHotel();
                        if(!empty($hotel)):
                            foreach($hotel as $h):
                    ?>
                    <div class="col-md-6">
                        <div class="row room-item g-0 flex-md-row">
                            <div class="room-content">
                                <?php $cheap = $uf->getCheapestPrice($h['id_hotel']); ?>
                                <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                <h3><?= $h['nama_hotel'] ?> HOTEL</h3>
                                <p class="txt-price">Mulai Dari</p>
                                <p class="room-price">IDR <?= number_format($cheap['harga_kamar'], 2, ",", "."); ?></p>
                                <p class="txt-price">/kamar/malam</p>

                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 64H64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H256V64zm32 384H576c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H288V448zM64 160c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160z"/></svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M248 48V256h48V58.7c23.9 13.8 40 39.7 40 69.3V256h48V128C384 57.3 326.7 0 256 0H192C121.3 0 64 57.3 64 128V256h48V128c0-29.6 16.1-55.5 40-69.3V256h48V48h48zM48 288c-12.1 0-23.2 6.8-28.6 17.7l-16 32c-5 9.9-4.4 21.7 1.4 31.1S20.9 384 32 384l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32V384H352v96c0 17.7 14.3 32 32 32s32-14.3 32-32V384c11.1 0 21.4-5.7 27.2-15.2s6.4-21.2 1.4-31.1l-16-32C423.2 294.8 412.1 288 400 288H48z"/></svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 64V352H576V64H64zM0 64C0 28.7 28.7 0 64 0H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM128 448H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H128c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 96c0-17.7 14.3-32 32-32s32 14.3 32 32s14.3 32 32 32s32-14.3 32-32c0-53-43-96-96-96s-96 43-96 96V288H160V264c0-30.9-25.1-56-56-56H56c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c4.4 0 8 3.6 8 8v24H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H256 480c17.7 0 32-14.3 32-32s-14.3-32-32-32H400V264c0-4.4 3.6-8 8-8h56c13.3 0 24-10.7 24-24s-10.7-24-24-24H408c-30.9 0-56 25.1-56 56v24H288V96zM480 416V384H32v32c0 53 43 96 96 96H384c53 0 96-43 96-96z"/></svg>
                                    </li>
                                </ul>

                                <a href="./hotel.php?id_hotel=<?= $h['id_hotel'] ?>">DETAIL</a>
                            </div>

                            <div class="img-box">
                                <img src="./../assets/hotel-image/<?= $h['foto_hotel'] ?>" alt="standard-room" class="room-thumbnail">
                            </div>
                        </div>
                    </div>
                    <?php   endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="room-go-btn">
                    <a href="./room.php">
                        SEE MORE
                    </a>
                </div>
            </div>

            <!-- <div class="container">
                <h2 class="section-title" >Our Facility</h2>
                <p class="desc">Nikmati Perjalanan Anda Dengan Fasilitas Yang Telah Kami Sediakan</p>
            </div> -->

        </div>
    </div>

<?php include_once './components/footer.php'; ?>