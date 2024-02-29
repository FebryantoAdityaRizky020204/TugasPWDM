<?php

    if(!isset($_SESSION)) session_start();
    class Connection {
        // Database Property
        private $localhost = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'spineta';
        private $conn;


        // Connect to database
        public function __construct() {
            try {
                $this->conn = mysqli_connect(
                    $this->localhost,
                    $this->username,
                    $this->password,
                    $this->dbname);

                } catch(Exception $e) {
                    die("Connection Failed: " + $e->getMessage());
                }
        }

        // fungsi untuk mengambil single data
        public function singleFetch($query){
            $data = NULL;
            if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data = $row;
				}
			}
            return $data;
        }

        // fungsi untuk mengambil banyak data
        public function fetchAll($query){
            $data = NULL;
            if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_row($sql)) {
                    $data[] = $row;
				}
			}
            return $data;
        }

        // Fungsi untuk mnejlanakan sql
        public function runSql($query){
            $data = false;
            if ($sql = $this->conn->query($query)) {
                    $data = $sql;
			}
            return $data;
        }
    }