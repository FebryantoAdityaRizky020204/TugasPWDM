<?php 
    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION['login_admin'])) header('Location: ./login.php');
    $dataAdmin = $_SESSION['data_admin'];

    require_once './../app/Connection.php';
    require_once './../app/admin/AdminFunction.php';

    $af = new AdminFunction();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | ROOM</title>
    <link rel="stylesheet" href="./../styles/admin-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">

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
                        <a href="./kategori.php" class="active">
                            <img src="./../assets/icon/kategori.png" alt="kategori"> Kategori
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="./booking.php">
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
                        KATEGORI | SPINETA HOTEL
                    </div>

                    <div class="col-12">
                    <div class="row justify-content-between">
                            <div class="col-md-6 left">
                                <div class="checkin-card my-card p-sticky">
                                    <div class="info-container">
                                        <div class="role">
                                            <span>ROLE</span> <?= $dataAdmin['role'] ?>
                                        </div>

                                        <div class="role">
                                            <span>ADMIN</span> <?= $dataAdmin['nama_admin'] ?>
                                        </div>
                                    </div>
                                    <?php $tipeKamar = $af->getTipeKamar($dataAdmin['id_admin']); ?>

                                    <?php if(!empty($tipeKamar->num_rows)): ?>
                                    <form class="form-container" method="post" action="./operation.php">
                                        <div class="title-form">
                                            TAMBAH KAMAR
                                        </div>
                                        <div class="input-container">
                                            <select name="tipe_kamar" id="tipe_kamar" required>
                                                <option value="0" disabled selected>--Pilih Disini--</option>
                                                <?php foreach($tipeKamar as $t): ?>
                                                    <option value="<?= $t['id_tipekamar'] ?>"><?= $t['tipe_kamar'] ?> - <?= $t['jumlah_kamar'] ?> Kamar</option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="tipe_kamar">
                                                Tipe Kamar
                                            </label>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" name="nama_kamar" id="nama_kamar" required autocomplete="off">
                                            <label for="nama_kamar">
                                                Nama Kamar
                                            </label>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mt-0 ps-0">
                                                <div class="input-container">
                                                    <select name="jumlah_tamu" id="jumlah_tamu">
                                                        <option value="0" disabled selected>--Pilih Disini--</option>
                                                        <option value="1">1 Tamu</option>
                                                        <option value="2">2 Tamu</option>
                                                        <option value="3">2 Tamu + Anak</option>
                                                        <option value="4">ALL FAMILY</option>
                                                    </select>
                                                    <label for="jumlah_tamu">
                                                        Jumlah Tamu
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col mt-0 pe-0">
                                                <div class="input-container">
                                                    <select name="jumlah_bed" id="jumlah_bed">
                                                        <option value="0" disabled selected>--Pilih Disini--</option>
                                                        <option value="1">1 Bed</option>
                                                        <option value="2">2 Bed</option>
                                                        <option value="3">King Size</option>
                                                    </select>
                                                    <label for="jumlah_bed">
                                                        Jumlah Bed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mt-0 ps-0">
                                                <div class="input-container">
                                                    <input type="number" name="no_kamar_start" id="no_kamar_start" required>
                                                    <label for="no_kamar_start">
                                                        No Kamar (START)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col mt-0 pe-0">
                                                <div class="input-container">
                                                    <input type="number" name="no_kamar_end" id="no_kamar_end" required>
                                                    <label for="no_kamar_end">
                                                        No Kamar (END)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <select name="tambahan" id="tambahan">
                                                <option value="none">Tidak Ada</option>
                                                <option value="Sarapan">Sarapan</option>
                                                <option value="Bed">Bed (1 Tempat Tidur)</option>
                                            </select>
                                            <label for="tambahan">
                                                Tambahan
                                            </label>
                                        </div>

                                        <div class="col mt-0 ps-0">
                                            <div class="input-container">
                                                <input type="number" name="harga_kamar" id="harga_kamar" required autocomplete="off">
                                                <label for="harga_kamar">
                                                    Harga Kamar (IDR/Kamar/Malam)
                                                </label>
                                            </div>
                                        </div>


                                        <button type="submit" name="tambahKamar" class="form-btn">TAMBAH KAMAR</button>
                                    </form>
                                    <?php else: ?>
                                        <div class="tipe-empty mt-4">
                                            Data Tipe Kamar Kosong isi di <a href="./hotel.php">HOTEL +TIPE KAMAR</a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php
                                    $kamar = $af->getKamar($dataAdmin['id_admin']);
                                    if(!empty($kamar)):
                                        foreach($kamar as $k):
                                            $tipeKamar = $af->getTipeKamarTK($k['id_tipekamar']);
                                            $hotel = $af->getHotelID($k['id_hotel']);
                                            ?>
                                        
                                        <div class="my-card p-0">
                                            <div class="col-12 p-3">
                                                <div class="col-12 top-box-hotel">
                                                    <span class="star txt-black">
                                                        <?= $hotel['nama_hotel'] ?> HOTEL
                                                    </span>
                                                    <span class="kamar">
                                                        No Kamar : <?= $k['no_kamar_start'] ?> - <?= $k['no_kamar_end'] ?>
                                                    </span>
                                                </div>
                                                <div class="col-12 mid-box-hotel">
                                                    <div class="col-9">
                                                        <p class="nama-hotel">
                                                            <?= $tipeKamar['tipe_kamar'] ?> <?= $k['nama_kamar'] ?>
                                                        </p>
                                                        <p class="alamat-hotel price">
                                                            IDR <?= number_format($k['harga_kamar'], 2, ",", ".") ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-12 box-hotel-btn-container kategori">
                                                    <button type="button" class="box-hotel-btn edit">
                                                        <i class="fa-solid fa-pen-to-square"></i> &nbsp;
                                                        EDIT
                                                    </button>
                                                    <button type="button" class="box-hotel-btn delete">
                                                        <i class="fa-solid fa-trash"></i> &nbsp;
                                                        DELETE
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="my-border kategori"></div>
                                            </div>
                                        </div>

                                        <!-- box tambah tipe kamar -->
                                        <div class="detail-box-container hidden" id="detail-box" -id-hotel="<?= $h['id_hotel'] ?>">
                                            <div class="detail-box my-card">
                                                <div class="detail-title">
                                                    Tambah Tipe Kamar

                                                    <button type="button" class="close-detail-btn" onclick="closeDetail('<?= $h['id_hotel'] ?>')">
                                                        &#10006;
                                                    </button>
                                                </div>

                                                <div class="form-container">
                                                    <form method="post" action="./operation.php" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_hotel" value="<?= $h['id_hotel'] ?>">
                                                        <input type="hidden" name="id_adminHotel" value="<?= $dataAdmin['id_admin'] ?>">
                                                        <div class="input-container">
                                                            <input type="text" name="nama_room" id="nama_room" required autocomplete="off">
                                                            <label for="nama_room">
                                                                Tipe Kamar
                                                            </label>
                                                        </div>
                                                        <div class="input-container">
                                                            <input type="number" name="jumlah_kamar" id="jumlah_kamar" required>
                                                            <label for="jumlah_kamar">
                                                                Jumlah Kamar
                                                            </label>
                                                        </div>
                                                        <div class="input-container">
                                                            <input type="file" name="foto_kamar" id="foto_kamar" required>
                                                            <label for="foto_kamar" class="file-label">
                                                                Foto Kamar
                                                            </label>
                                                        </div>

                                                        <button type="submit" name="tambahRoom" class="form-btn w-100">TAMBAH</button>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>


                                        



                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <div class="my-card fw-bold">
                                            DATA KOSONG
                                        </div>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <script>

    </script>
    <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>