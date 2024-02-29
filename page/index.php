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
</head>
<body>
    <nav class="nav">
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


    <div class="main">
        <div class="banner">
            <div class="banner-content">
                <h2>Hotel Terbaik Untuk Anda</h2>
                <p>Dapatkan Pelayanan dan Fasilitas Lengkap dengan Harga Terbaik</p>
<!-- 
                <div class="star">
                    <img src="/assets/image/5-stars.png" alt="5-stars">
                </div> -->
            </div>
        </div>

        <div class="container-xxl">

            <div class="container">
                <!-- <div class="p-4 p-md-5 mb-4 bg-body-secondary content-header"> -->
                <div class="room-header">
                    <div class="col-lg-6">
                        <h1 class="">Our Popular Room</h1>
                        <p class="">Temukan Kamar Terbaik Bagi Anda, kami menyediakan N Kategori Kamar Yang Bisa Anda Pilih.</p>
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row room-item g-0 flex-md-row">
                            <div class="room-content">
                                <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                <h3>STANDARD ROOM</h3>
                                <p class="txt-price">Mulai Dari</p>
                                <p class="room-price">IDR 500.000</p>
                                <p class="txt-price">/kamar/malam</p>
                                <p class="room-desc">
                                    Dapatkan Kamar Dengan Harga Terjangkau, dan nikmati Fasilitas yang Kami Sediakan Bagi Anda.
                                </p>

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

                                <a href="javascript:void(0)">DETAIL</a>
                            </div>

                            <div class="img-box">
                                <img src="./../assets/image/standard-room.jpg" alt="standard-room" class="room-thumbnail">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row room-item g-0 flex-md-row">
                            <div class="room-content">
                                <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                                <h3>DELUXE ROOM</h3>
                                <p class="txt-price">Mulai Dari</p>
                                <p class="room-price">IDR 1000.000</p>
                                <p class="txt-price">/kamar/malam</p>
                                <p class="room-desc">
                                    Dapatkan Kamar Dengan Harga Terbaik, dan Dapatkan Fasilitas Dan Hiburan Yang Kami Sediakan.
                                </p>

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
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M309.5 178.4L447.9 297.1c-1.6 .9-3.2 2-4.8 3c-18 12.4-40.1 20.3-59.2 20.3c-19.6 0-40.8-7.7-59.2-20.3c-22.1-15.5-51.6-15.5-73.7 0c-17.1 11.8-38 20.3-59.2 20.3c-10.1 0-21.1-2.2-31.9-6.2C163.1 193.2 262.2 96 384 96h64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384c-26.9 0-52.3 6.6-74.5 18.4zM160 160A64 64 0 1 1 32 160a64 64 0 1 1 128 0zM306.5 325.9C329 341.4 356.5 352 384 352c26.9 0 55.4-10.8 77.4-26.1l0 0c11.9-8.5 28.1-7.8 39.2 1.7c14.4 11.9 32.5 21 50.6 25.2c17.2 4 27.9 21.2 23.9 38.4s-21.2 27.9-38.4 23.9c-24.5-5.7-44.9-16.5-58.2-25C449.5 405.7 417 416 384 416c-31.9 0-60.6-9.9-80.4-18.9c-5.8-2.7-11.1-5.3-15.6-7.7c-4.5 2.4-9.7 5.1-15.6 7.7c-19.8 9-48.5 18.9-80.4 18.9c-33 0-65.5-10.3-94.5-25.8c-13.4 8.4-33.7 19.3-58.2 25c-17.2 4-34.4-6.7-38.4-23.9s6.7-34.4 23.9-38.4c18.1-4.2 36.2-13.3 50.6-25.2c11.1-9.4 27.3-10.1 39.2-1.7l0 0C136.7 341.2 165.1 352 192 352c27.5 0 55-10.6 77.5-26.1c11.1-7.9 25.9-7.9 37 0z"/></svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M257.5 27.6c-.8-5.4-4.9-9.8-10.3-10.6v0c-22.1-3.1-44.6 .9-64.4 11.4l-74 39.5C89.1 78.4 73.2 94.9 63.4 115L26.7 190.6c-9.8 20.1-13 42.9-9.1 64.9l14.5 82.8c3.9 22.1 14.6 42.3 30.7 57.9l60.3 58.4c16.1 15.6 36.6 25.6 58.7 28.7l83 11.7c22.1 3.1 44.6-.9 64.4-11.4l74-39.5c19.7-10.5 35.6-27 45.4-47.2l36.7-75.5c9.8-20.1 13-42.9 9.1-64.9v0c-.9-5.3-5.3-9.3-10.6-10.1c-51.5-8.2-92.8-47.1-104.5-97.4c-1.8-7.6-8-13.4-15.7-14.6c-54.6-8.7-97.7-52-106.2-106.8zM208 144a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM144 336a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm224-64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z"/></svg>
                                    </li>
                                </ul>

                                <a href="javascript:void(0)">DETAIL</a>
                            </div>

                            <div class="img-box">
                                <img src="./../assets/image/deluxe-room.webp" alt="standard-room" class="room-thumbnail">
                            </div>
                        </div>
                    </div>
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


    <footer class="footer">
        <div class="top">
            <div class="left">
                <h2>Spineta<span></span></h2>
                <p>Melayani sejak 2012, Hotel Spineta menawarkan pengalaman menginap yang tak terlupakan. Temukan kenyamanan, fasilitas modern, dan pemandangan yang menakjubkan. Terima kasih atas kepercayaan Anda kepada Kami. Hubungi kami untuk kritik dan saran.</p>
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
            © 2012-2024 Spineta Management. All Rights Reserved.
        </div>

    </footer>

    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>