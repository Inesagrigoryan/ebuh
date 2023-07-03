<?php 

    namespace mvc\app\models;

    interface AddCarInterface {
        public function saveCar($brand, $model, $year, $price);
    }

?>