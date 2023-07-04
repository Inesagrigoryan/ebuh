<?php
    namespace mvc\app\models;

    use mvc\app\models\ModelDb;
    use mvc\app\models\CarInterface;

    require_once('../models/ModelDb.php');
    require_once('../models/CarInterface.php');

    class Car  extends ModelDb implements CarInterface
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function addCar($brand, $model, $year, $price)
        {
            $query = "INSERT INTO cars (brand, model, year, price)
                    VALUES ('$brand', '$model', '$year', '$price')";
            $result = $this->getConnection()->query($query);
            if($result) {
                return true;
            } else {
                return false;
            }
        }
       
        public function getAllData() {
            $query = "SELECT * FROM cars";
            $result = $this->getConnection()->query($query);
            
            $data = array();
            
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function updateData($id, $brand, $model, $year, $price) {

            $query = "UPDATE cars SET brand = '$brand', model = '$model', year = '$year', price = '$price' WHERE id = '$id'";
            $result = $this->getConnection()->query($query);
            if($result) {
                return true;
            } else {    
                return false;
            }
        }

        public function deleteData($id) {
            $query = "DELETE FROM cars WHERE id = '$id'";
            $result = $this->getConnection()->query($query);

            if($result) {
                return true;
            } else {
                return false;
            }
        }
    }
?>