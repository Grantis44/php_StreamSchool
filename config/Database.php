<?php
    class Database{
        // DB Params
        private $host = 'localhost';
        private $db_name = 'streamSchool';
        private $userName = 'root';
        private $password = '123456';
        private $conn;

        //Db Connect
        public function conect() {
            $this->conn = null;

            try{
                $this->conn = new PDO('mySql:host=' . $this->host . ';dbName=' . $this->db_Name, 
            $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'Connection Error: ' .$e->getMessage();
            }

            return this->conn;
        }
    }