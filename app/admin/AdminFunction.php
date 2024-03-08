<?php

class AdminFunction {
    public $db;

    public function __construct() {
        $this->db = new Connection();
    }


    // ============== ROOM

    // *add room =====================================
    public function addRoom($data, $file) {
        $id_tipekamar = uniqid(21);
        $id_hotel = $data['id_hotel'];
        $id_admin = $data['id_adminHotel'];
        $namaRoom = strtoupper($data['nama_room']);
        $jumlah_kamar = $data['jumlah_kamar'];
        $foto_kamar = $this->imageName($file['foto_kamar'], 'kamar-image');

        $response = [];

        if(!empty($id_tipekamar) && !empty($id_hotel) && !empty($id_admin) && !empty($namaRoom) && !empty($jumlah_kamar) &&
        !empty($foto_kamar)) {
            $query = "INSERT INTO `tb_tipekamar`(`id_tipekamar`, `id_hotel`, `id_adminHotel`, `tipe_kamar`, `jumlah_kamar`, `foto_kamar`) VALUES ('$id_tipekamar','$id_hotel','$id_admin','$namaRoom',$jumlah_kamar,'$foto_kamar')";

            if($this->db->runSql($query)) {
                $response = ['status' => true, 'msg' => 'Tambah Room Berhasil'];
            } else {
                $response = [ 'status' => false, 'msg' => 'Insert Data Gagal' ];
            }
        } else {
            $response = [ 'status' => false, 'msg' => 'Ada Data Kosong' ];
        }
        return $response;
    }

    // *ambil data room =========================================
    public function getRoomForAdminHotel($id_hotel) {
        $query = "SELECT * FROM `tb_tipekamar` WHERE `id_hotel` = '$id_hotel'";
        $data = $this->db->fetchAll($query);
        return $data;
    }


    // *ambil data tipe kamar
    public function getTipeKamar($id_admin) {
        $query = "SELECT * FROM `tb_tipekamar` WHERE `id_adminHotel` = $id_admin";
        $data = $this->db->runSql($query);
        return $data;
    }

    public function getTipeKamarTK($idTipeKamar) {
        $query = "SELECT * FROM `tb_tipekamar` WHERE `id_tipekamar` = '$idTipeKamar'";
        $data = $this->db->singleFetch($query);
        return $data;
    }

    // =====================================
    // * Tambah Kamar
    public function addKamar($data) {
        $idKamar = uniqid('KMR');
        $idTipeKamar = $data['tipe_kamar'];
        $hotel = $this->db->singleFetch("SELECT `id_hotel`, `id_adminHotel` FROM `tb_tipekamar` WHERE `id_tipekamar` = '$idTipeKamar'");
        $idHotel = $hotel['id_hotel'];
        $idAdmin = $hotel['id_adminHotel'];
        $namaKamar = strtoupper($data['nama_kamar']);
        $jumlahTamu = $data['jumlah_tamu'];
        $jumlahBed = $data['jumlah_bed'];
        $noKamarStart = $data['no_kamar_start'];
        $noKamarEnd = $data['no_kamar_end'];
        $tambahan = $data['tambahan'];
        $hargaKamar = $data['harga_kamar'];

        $response = [];

        if(!empty($idKamar) && !empty($idTipeKamar) && !empty($idHotel) && !empty($idAdmin) && !empty($namaKamar) && !empty($jumlahTamu) && !empty($jumlahBed) && !empty($noKamarStart) && !empty($noKamarEnd) && !empty($tambahan) && !empty($hargaKamar)) {


            $query = "INSERT INTO `tb_kamar`(`id_kamar`, `id_hotel`, `id_tipekamar`, `id_hoteladmin`, `nama_kamar`, `jumlah_tamu`, `jumlah_bed`, `no_kamar_start`, `no_kamar_end`, `tambahan`, `harga_kamar`) VALUES ('$idKamar','$idHotel','$idTipeKamar', '$idAdmin', '$namaKamar',$jumlahTamu, $jumlahBed, $noKamarStart, $noKamarEnd, '$tambahan', $hargaKamar)";

            if($this->db->runSql($query)) {
                $response = ['status' => true, 'msg' => 'Tambah Kamar Berhasil'];
            } else {
                $response = ['status' => false, 'msg' => 'Tambah Kamar Gagal'];
            }
        } else {
            $response = ['status' => false, 'msg' => 'Ada Data Kosong'];
        }
        return $response;
    }

    // get kategori
    public function getKamar($idAdmin) {
        $query = "SELECT * FROM `tb_kamar` WHERE `id_hoteladmin` = $idAdmin";
        $data = $this->db->fetchAll($query);
        return $data;
    }


    // fungsi untuk menginput data ke table hotel
    public function tambahHotel($data, $file) {
        
        $idHotel = uniqid();
        $idAdmin = $data['id_adminHotel'];
        $namaHotel = strtoupper($data['nama_hotel']);
        $alamatHotel = $data['alamat_hotel'];
        $kabupatenHotel = $data['kabupaten_hotel'];
        $provinsiHotel = $data['provinsi_hotel'];
        $bintangHotel = $data['bintang_hotel'];
        $jumlahKamar = $data['jumlah_kamar'];
        $imgName = $this->imageName($file['foto_hotel'], 'hotel-image');

        $data = [];

        if(!empty($idAdmin) && !empty($idHotel) && !empty($namaHotel) && !empty($alamatHotel) && !empty($kabupatenHotel) && 
        !empty($provinsiHotel) && !empty($bintangHotel) && !empty($jumlahKamar) && !empty($imgName)) {
            $query = "INSERT INTO `tb_hotel`(`id_hotel`, `id_adminHotel`, `nama_hotel`, `alamat_hotel`, `kabupaten_hotel`, `provinsi_hotel`, `bintang_hotel`, `jumlah_kamar`, `foto_hotel`) VALUES ('$idHotel',$idAdmin,'$namaHotel','$alamatHotel','$kabupatenHotel','$provinsiHotel',$bintangHotel,$jumlahKamar,'$imgName')";

            if($this->db->runSql($query)) {
                $data = ['status' => true, 'msg' => 'Tambah Hotel Berhasil'];
            } else {
                $data = ['status' => true, 'msg' => 'Tambah Hotel Gagal'];
            }
        } else {
            $data = ['status' => true, 'msg' => 'Ada Data Kosong'];
        }

        return $data;
    }

    // fungsi untuk mengambil data dari table hotel
    public function getHotel($id_admin) {
        $query = "SELECT * FROM `tb_hotel` WHERE `id_adminHotel` = $id_admin";
        $data = $this->db->fetchAll($query);
        return $data;
    }

    public function getHotelID($idHotel) {
        $query = "SELECT * FROM `tb_hotel` WHERE `id_hotel` = '$idHotel'";
        $data = $this->db->singleFetch($query);
        return $data;
    }

    // simpan gambar dan return nama gambar
    public function imageName($img, $namaFile) {
        if (!empty($img)) {
            $filename = $img['name'];
            $filetype = $img['type'];
            $filetmpname = $img['tmp_name'];
            $fileerror = $img['error'];
            $filesize = $img['size'];

            $name = explode(".", $filename);
            $ext = strtolower(end($name));

            $allowext = ["jpg", "jpeg", "png", "webp"];

            $response = [
                'status' => false,
                'msg' => 'Gagal'
            ];

            if (in_array($ext, $allowext)) {
                if ($fileerror === 0) {
                    if ($filesize < 10000000) {

                        $filenamenew = uniqid('', true) . "." . $ext;
                        $filedestination = './../assets/' . $namaFile .'/' . $filenamenew;

                        move_uploaded_file($filetmpname, $filedestination);
                        return $filenamenew;
                    } else {
                        $response = ['status' => false, 'msg' => 'Ukuran Gambar Yang Anda Pilih Terlalu Besar!!'];
                    }
                } else {
                    $response = ['status' => false, 'msg' => 'Gambar Kosong, Pilih Gambar Terlabih Dahulu!!'];
                }
            } else {
                $response = ['status' => false, 'msg' => 'Gambar Yang Anda Pilih Salah'];
            }
        } else {
            $response = ['status' => false, 'msg' => 'Gambar Tidak Ada!!'];
        }

        return $response;
    }
}