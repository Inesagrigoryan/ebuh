<?php 

    namespace mvc\app\controllers;

    interface CrudInterface {
        public function redirect($location);
        public function getAllData();
        public function addCarData();
        public function deleteData();
        public function updateData();
    }

?>