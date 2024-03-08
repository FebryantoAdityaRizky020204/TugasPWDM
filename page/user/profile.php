<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPINETA | ROOM</title>
    <link rel="stylesheet" href="./../../styles/styles.css">
    <link rel="stylesheet" href="./../../styles/profile.css">
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
                    <a href="./../user/cek-pesanan.php">Cek Pesanan</a>
                </li>
            </ul>
            
            <a class="auth-btn masuk" href="./../auth/login.php">MASUK</a>
            <a class="auth-btn daftar" href="./../auth/register.php">DAFTAR</a>

            <a class="auth-btn" href="./../user/profile.php">USER</a>
        </div>
    </nav>

    <div class="container-xxl">
        <div class="p-room-header">
            <h1 class="">PROFILE</h1>
        </div>

        <div class="container-xxl p-0">
            <div class="row">
                <div class="row g-5 m-0 mt-0">
                    <div class="col-md-3 p-1">
                        <div class="profile-container">
                            <div class="profile-header">
                                <div class="profile-img">
                                    <img src="./../../assets/image/anon.jpg" alt="anon">
                                </div>
                                <h4 class="user-name">John Doe</h4>
                                <h6 class="user-nik">6850495849584730</h6>
                                <div class="col-12 prof-btn">
                                    <a class="home" href="./../index.php">HOME</a>
                                    <a class="logout" href="javascript:void(0)">LOGOUT</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="row">

                            <div class="col-md-12 section">
                                <div class="form-container">
                                    <form action="0" method="post">
                        
                                        <div class="col-12 section">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="text" name="name" id="name" required value="John Doe">
                                                        <label for="name">
                                                            Nama Lengkap
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="text" name="name" id="name" required value="6850495849584730">
                                                        <label for="name">
                                                            NIK
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="email" name="email" id="email" required value="john-doe@gmail.com">
                                                        <label for="email">
                                                            Email
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="number" name="numberPhone" id="numberPhone" required value="091837485934">
                                                        <label for="numberPhone">
                                                            No Handphone
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <select name="jenisKelamin" id="jenisKelamin">
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                        <label for="jenisKelamin">
                                                            Jenis Kelamin
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="text" name="pekerjaan" id="pekerjaan" required value="Wiraswasta">
                                                        <label for="pekerjaan">
                                                            Pekerjaan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 section">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-container">
                                                        <textarea name="alamat" id="alamat">Jl. Tak Bernama No.12</textarea>
                                                        <label for="alamat">Alamat</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="text" name="provinsi" id="provinsi" required value="Kalimantan Tengah">
                                                        <label for="provinsi">
                                                            Provinsi
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="text" name="kecamatan" id="kecamatan" required value="Baamang">
                                                        <label for="kecamatan">
                                                            Kecamatan
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-container">
                                                        <input type="text" name="kelurahan" id="kelurahan" required value="Baamang Tengah">
                                                        <label for="kelurahan">
                                                            Kelurahan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="submit-btn" type="submit" value="submit">PERBARUI DATA</button>

                                    </form>
                                </div>
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
                            <li class="scroll"><a class="active" href="./index.php">Home</a></li>
                            <li class="scroll"><a href="./room.php">Room</a></li>
                            <li class="scroll"><a href="./user/cek-pesanan.php">Cek Pesanan</a>
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