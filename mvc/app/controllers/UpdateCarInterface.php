<?php 

    namespace mvc\app\controllers;

    interface UpdateCarInterface {
        public function updateData($id, $brand, $model, $year, $price);
    }

?>