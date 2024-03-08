<?php

    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION['login_admin'])) header('Location: ./login.php');
    
    require_once './../app/Connection.php';
    require_once './../app/admin/AdminFunction.php';
    $ap = new AdminFunction();

    $get = '';
    if(isset($_GET['option'])) {
        $get = $_GET['option'];
    }

    // *logout =============================================
    if($get == 'logout') {
        session_start();
        session_destroy();
        session_reset();
        $_SESSION = '';
        header('Location: ./index.php');
    }

    // *tambah data Tipe Kamar ===================================
    if(isset($_POST['tambahTipeKamar'])) { 
        $ap->addRoom($_POST, $_FILES);
        header('Location: ./hotel.php');
    }
    
    // *tambah hotel
    if(isset($_POST['tambahHotel'])) {
        $ap->tambahHotel($_POST, $_FILES);
        header('Location: ./hotel.php');
    }

    // *Tambah Kamar
    if(isset($_POST['tambahKamar'])) {
        $ap->addKamar($_POST);
        header('Location: ./kategori.php');
    }