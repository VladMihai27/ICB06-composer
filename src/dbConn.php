<?php

    class DBconn{
        private $host;
        private $dbname;
        private $user;
        private $password;
        private $conn;

        public function _construct(){
        }

        public function connect(){
            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host=localhost;dbname=icb0006_uf4_pr01;user=root');
                $this->conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: '.$e->getMessage();
            }
            return $this->conn;
        }
        public function disconnect(){
            $this->conn = NULL;
        }
    }

?>