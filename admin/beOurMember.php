<?php 
    require_once './../app/Connection.php';
    require_once './../app/admin/AdminAuth.php';
    
    if(isset($_POST['daftar'])) {
        $auth = new AdminAuth();
        $response = $auth->registrasi($_POST);
        if($response['status']) {
            header('Location: ./login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | LOGIN</title>
    <link rel="stylesheet" href="./../styles/style-auth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="auth-container">
        <div class="container-form">
            <div class="form-container">
                <div class="auth-title-container">
                    <h4 class="auth-title">Be Our Member</h4>
                    <a href="./../page/index.php">- TheHotel -</a>
                </div>
                <form method="post">
                    <input type="hidden" name="role" value="hotelAdmin">
                    <div class="input-container">
                        <input type="text" name="namaAdmin" id="namaAdmin" required autofocus autocomplete="off">
                        <label for="namaAdmin">
                            <span class="input-icon">
                                <i class="fa-regular fa-address-card"></i>
                            </span>
                            Nama Lengkap
                        </label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="username_admin" id="username_admin" required autofocus autocomplete="off">
                        <label for="username_admin">
                            <span class="input-icon">
                                <i class="fa-regular fa-address-card"></i>
                            </span>
                            Username
                        </label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password_admin" id="password_admin" required>
                        <label for="password_admin">
                            <span class="input-icon">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </span>
                            Password
                        </label>
                    </div>

                    <div class="row cont-auth-btn">
                        <button class="auth-btn" type="submit" name="daftar">DAFTAR</button>
                    </div>
                </form>
                <div class="credit">
                    © 2012-2024 TheHotel Management. All Rights Reserved.
                </div>
            </div>

            <video src="./../assets/video/video-2.mp4" autoplay muted loop id="myVideo">
            </video>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>