<?php
    namespace mvc\app\models;

    use mysqli;
    use mvc\app\models\ModelDbInterface;

    require_once('../models/ModelDbInterface.php');

    class  ModelDb implements ModelDbInterface
    {
        private $dbHost = "localhost";
        private $dbUser = "root";
        private $dbPass = "";
        private $dbName = "cardb";
        private $conn;

        function __construct() {    
            $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
            if ($this->conn->connect_error) {
                die("Failed to connect to MySQL: " . $this->conn->connect_error);
            } 
            else {
                return "Connected successfully";
            }
        }
        public function getConnection() {
            return $this->conn;
        }
    }

?>