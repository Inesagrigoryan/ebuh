<?php 

    namespace mvc\app\controllers;

    interface AddCarInterface {
        public function addCarData($brand, $model, $year, $price);
    }

?>