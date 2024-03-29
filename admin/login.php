<?php 
    require_once './../app/Connection.php';
    require_once './../app/admin/AdminAuth.php';
    
    if(isset($_POST['submit'])) {
        $auth = new AdminAuth();
        $response = $auth->login($_POST);
        if($response['status']) {
            header('Location: ./index.php');
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
</head>
<body>

    <div class="auth-container">
        <div class="container-form">
            <div class="form-container">
                <div class="auth-title-container">
                    <h4 class="auth-title">LOG IN ADMIN</h4>
                    <a href="./../page/index.php">- TheHotel -</a>
                </div>
                <form method="post">
                    <div class="input-container">
                        <input type="text" name="username" id="username" required autofocus autocomplete="off">
                        <label for="username">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            </span>
                            Username
                        </label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" id="password" required>
                        <label for="password">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg>
                            </span>
                            Password
                        </label>
                    </div>

                    <div class="row cont-auth-btn">
                        <button class="auth-btn" type="submit" name="submit">LOG IN</button>
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
</body>
</html>