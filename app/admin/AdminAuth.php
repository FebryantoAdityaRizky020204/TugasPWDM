<?php
    class AdminAuth {
        public $db;

        public function __construct() {
            $this->db = new Connection();
        }

        // untuk menambah admin
        public function registrasi($post) {
            $nama_admin = $post['namaAdmin'];
            $username_admin = $post['username_admin'];
            $password_admin = $post['password_admin'];
            $role = $post['role'];
            $data = [];

            if(!empty($nama_admin) AND !empty($username_admin) AND !empty($password_admin) && !empty($role)) {
                $password_admin = $this->openSSL($password_admin);

                $query = "INSERT INTO `tb_admin`(`id_admin`, `nama_admin`, `username`, `password`, `role`) 
                VALUES (NULL,'$nama_admin','$username_admin','$password_admin','$role')";
                
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
        public function login($data) {
            $username = $data['username'];
            $password = $data['password'];

            $data = [];

            if(!empty($username) AND !empty($password)) {
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

        public function logout() {
            session_destroy();
            session_reset();
            $_SESSION = '';
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