<?php 

    namespace mvc\app\models;

    interface UpdateDataInterface {
        public function updateData($id, $brand, $model, $year, $price);
    }

?>