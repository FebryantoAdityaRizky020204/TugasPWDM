<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPINETA | ROOM</title>
    <link rel="stylesheet" href="./../styles/styles.css">
    <link rel="stylesheet" href="./../styles/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../assets/bootstrap/css/bootstrap.min.css">
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
    

    <footer class="footer">
        <div class="top">
            <div class="left">
                <h2>Spineta<span></span></h2>
                <p>Melayani sejak 2012, TheHotel menawarkan pengalaman menginap yang tak terlupakan. Temukan kenyamanan, fasilitas modern, dan pemandangan yang menakjubkan. Terima kasih atas kepercayaan Anda kepada TheHotel. Hubungi kami untuk kritik dan saran.</p>
            </div>
            <div class="right">
                <div class="footer-list">
                    <h3>Get in Touch</h3>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                            </span>
                            <a href="javascript:void(0)">+63 9584 7584 95</a>
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                            </span>
                            <a href="javascript:void(0)">kritik-saran@thehotel.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            © 2012-2024 TheHotel Management. All Rights Reserved.
        </div>

    </footer>

    
    <script src="./../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>