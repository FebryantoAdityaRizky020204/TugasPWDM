<?php
    if(!isset($_SESSION)) {
        session_start();
        $_SESSION['BASEURL'] = 'http://localhost/tugaspwdm';
    }
    header('Location: ./page/index.php');