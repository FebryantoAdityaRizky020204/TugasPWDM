<?php 
    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION['login_admin'])) header('Location: ./login.php');
    $dataAdmin = $_SESSION['data_admin'];

    require_once './../app/Connection.php';
    require_once './../app/admin/AdminFunction.php';

    $ap = new AdminFunction();

    $hotel = $ap->getHotel($dataAdmin['id_admin']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | DASHBOARD</title>
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
                        <a  href="./hotel.php" class="active" >
                        <i class="fa-solid fa-hotel"></i> Hotel
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="./kategori.php">
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
                        HOTEL | SPINETA HOTEL
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
                                    <form class="form-container" enctype="multipart/form-data" method="post" action="./operation.php">
                                        <input type="hidden" name="id_adminHotel" value="<?= $dataAdmin['id_admin']; ?>">
                                        <div class="title-form">
                                            TAMBAH HOTEL
                                        </div>
                                        <div class="input-container">
                                            <input type="text" name="nama_hotel" id="nama_hotel" required autocomplete="off">
                                            <label for="nama_hotel">
                                                Nama Hotel
                                            </label>
                                        </div>
                                        <div class="input-container">
                                            <!-- <input type="text" name="alamat_hotel" id="alamat_hotel" required autocomplete="off"> -->
                                            <textarea name="alamat_hotel" id="alamat_hotel" cols="10" rows="5"></textarea>
                                            <label for="alamat_hotel">
                                                Alamat Hotel
                                            </label>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mt-0 ps-0">
                                                <div class="input-container">
                                                    <input type="text" name="kabupaten_hotel" id="kabupaten_hotel" required autocomplete="off">
                                                    <label for="kabupaten_hotel">
                                                        Kabupaten
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col mt-0 pe-0">
                                                <div class="input-container">
                                                    <input type="text" name="provinsi_hotel" id="provinsi_hotel" required autocomplete="off">
                                                    <label for="provinsi_hotel">
                                                        Provinsi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mt-0 ps-0">
                                                <div class="input-container">
                                                    <select name="bintang_hotel" id="bintang_hotel">
                                                        <option value="0" disabled selected>--Pilih Disini--</option>
                                                        <option value="1">Bintang 1</option>
                                                        <option value="2">Bintang 2</option>
                                                        <option value="3">Bintang 3</option>
                                                        <option value="4">Bintang 4</option>
                                                        <option value="5">Bintang 5</option>
                                                    </select>
                                                    <label for="bintang_hotel">
                                                        Bintang Hotel
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col mt-0 pe-0">
                                                <div class="input-container">
                                                    <input type="number" name="jumlah_kamar" id="jumlah_kamar" required autocomplete="off">
                                                    <label for="jumlah_kamar">
                                                        Jumlah Kamar Hotel
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <input type="file" name="foto_hotel" id="foto_hotel" required autocomplete="off">
                                            <label for="foto_hotel" class="file-label">
                                                Foto Hotel
                                            </label>
                                        </div>


                                        <button type="submit" name="tambahHotel" class="form-btn">TAMBAH HOTEL</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php
                                    if(!empty($hotel)):
                                        foreach($hotel as $h):
                                            ?>
                                        
                                        <div class="my-card p-0">
                                            <div class="img-box-hotel">
                                                <img src="./../assets/hotel-image/<?= $h['foto_hotel'] ?>" alt="<?= $h['foto_hotel'] ?>">
                                            </div>
                                            <div class="col-12 p-3">
                                                <div class="col-12 top-box-hotel">
                                                    <span class="star">
                                                        <?php for($i = 0; $i < $h['bintang_hotel'];  $i++): ?>
                                                            <i class="fa-solid fa-star"></i>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span class="kamar">
                                                        <?= $h['jumlah_kamar'] ?> Kamar
                                                    </span>
                                                </div>
                                                <div class="col-12 mid-box-hotel">
                                                    <div class="col-9">
                                                        <p class="nama-hotel"><?= $h['nama_hotel'] ?></p>
                                                        <p class="alamat-hotel"><?= $h['alamat_hotel'] ?> <?= $h['kabupaten_hotel'] ?> <?= $h['provinsi_hotel'] ?></p>
                                                    </div>
                                                    <div class="col-3 box-hotel-btn-container">
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
                                            </div>
                                            <div class="col-12">
                                                <div class="my-border"></div>
                                            </div>
                                            <div class="col-12 p-3">
                                                <?php 
                                                $tipeKamars = $ap->getRoomForAdminHotel($h['id_hotel']);
                                                
                                                ?>
                                                <div class="tipe-empty">
                                                    <?php if(empty($tipeKamars)): ?>
                                                    <p>Tipe Kamar Kosong</p>
                                                    <?php else: ?>
                                                        <p>List Tipe Kamar</p>
                                                    <?php endif; ?>


                                                    <button type="button" class="addTipeKamar" onclick="viewDetail('<?= $h['id_hotel'] ?>')">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                        Tipe Kamar
                                                    </button>
                                                </div>
                                                <div class="list-tipe-kamar">
                                                    <?php foreach($tipeKamars as $tipe): ?>
                                                    <div class="tipe-item">
                                                        <?= $tipe['tipe_kamar'] ?> - <?= $tipe['jumlah_kamar'] ?> Kamar
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
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

                                                        <button type="submit" name="tambahTipeKamar" class="form-btn w-100">TAMBAH</button>
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
        function viewDetail(idHotel) {
            let detailBox =document.querySelector(`[-id-hotel="${idHotel}"]`);
            detailBox.classList.remove('hidden');
        }
        
        function closeDetail(idHotel) {
            let detailBox =document.querySelector(`[-id-hotel="${idHotel}"]`);
            detailBox.classList.add('hidden');
        }
    </script>
    <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>