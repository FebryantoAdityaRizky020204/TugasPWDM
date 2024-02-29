<?php
    require_once './../connection.php';


    class UserAuth {
        public $db = new Connection();

        // untuk admin registrasi
        public function registrasi() {
            $nama_user = $_POST['nama_user'];
            $username_user = $_POST['username_user'];
            $password_user = $_POST['password_user'];
            $data = [];

            if(!empty($nama_admin) AND !empty($username_admin) AND !empty($password_admin)) {
                $query = "";
                if($this->db->runSql($query)) {
                    $data = [
                        'status' => true,
                        'msg' => 'Registrasi Berhasil'
                    ];
                } else {
                    $data = [
                        'status' => false,
                        'msg' => 'Registrasi Gagal'
                    ];
                }
            }

            return $data;
        }   

        // untuk admin login
        public function login() {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = [];

            if(!empty($username) AND !empty(!$password)) {
                $mybeUser = $this->db->singleFetch("SELECT * FROM `tb_admin` WHERE `username` = '$username'");

                $mybePasswordUSer = $this->openSSL($password);

                if($mybeUser['password'] == $mybePasswordUSer) {
                    $_SESSION['login_admin'] = true;
                    $_SESSION['data_admin'] = $mybeUser;

                    $data = [
                        'status' => true,
                        'msg' => 'Login Berhasil'
                    ];
                } else {
                    $data = [ 'status' => false, 'msg' => 'Login Gagal' ];
                }
            } else {
                $data = [ 'status' => false, 'msg' => 'Login Gagal' ];
            }

            return $data;
        }


        // untuk mengenkripsi password
        protected function openSSL($pass) {
            $key = "TVg3NFlqQWJDWVo5MAGrUEFzVDI=";
            $method = "AES-256-CTR";
            $iv = substr(hash('sha256', $pass), 0, 16);
            $output = openssl_encrypt($key, $method, $pass, 0, $iv);
            $output = base64_encode($output);
            return $output;
        }
    }