<?php
    namespace mvc\app\controllers;

    use mvc\app\models\GetData;
    use mvc\app\controllers\GetCarsInterface;

    require_once('../models/GetData.php');
    require_once('../controllers/GetCarsInterface.php');

    class GetCars implements GetCarsInterface{
        private $model;

        public function __construct() {
            $this->model = new GetData;
        }
        
        public function getAllData() {
            $data = $this->model->getAllData();
            return $data;
        }
    }
?>