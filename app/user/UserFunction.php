<?php

class UserFunction {
    public $db;
    public function __construct() {
        $this->db = new Connection();
    }

    // AMBIL 2 HOTEL DARI DB
    function getTwoHotel() {
        $query = "SELECT * FROM `tb_hotel` LIMIT 2";
        $data = $this->db->fetchAll($query);
        return $data;
    }

    // ambil harga termurah dari hotel
    function getCheapestPrice($idHotel) {
        $query = "SELECT `harga_kamar` FROM `tb_kamar` WHERE `id_hotel` = '$idHotel' ORDER BY `harga_kamar` ASC LIMIT 1";
        $data = $this->db->singleFetch($query);
        return $data;
    }


    // ambil data hotel
    function getSingleHotel($idHotel) {
        $query = "SELECT * FROM `tb_hotel` WHERE `id_hotel` = '$idHotel'";
        $data = $this->db->singleFetch($query);
        return $data;
    }

    function getListRoom($idHotel) {
        $query = "SELECT * FROM `tb_kamar` WHERE `id_hotel` = '$idHotel'";
        $data = $this->db->fetchAll($query);
        return $data;
    }
}