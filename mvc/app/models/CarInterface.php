<?php 
    namespace mvc\app\models;

    interface CarInterface {
        public function addCar($brand, $model, $year, $price);
        public function getAllData();
        public function updateData($id, $brand, $model, $year, $price);
        public function deleteData($id);
    }

?>