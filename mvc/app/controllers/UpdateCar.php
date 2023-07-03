<?php
    namespace mvc\app\controllers;

    use mvc\app\models\UpdateData;
    use mvc\app\controllers\UpdateCarInterface;

    require_once('../models/UpdateData.php');
    require_once('../controllers/UpdateCarInterface.php');

    class UpdateCar implements UpdateCarInterface {
        private $model;

        public function __construct() {
            $this->model = new UpdateData;
        }
        
        public function updateData($id, $brand, $model, $year, $price) {
            
            $upd = $this->model->updateData($id, $brand, $model, $year, $price);
            if($upd) {
                echo "Data updated successfully.";
            } else {
                echo "There is an error!!";
            }
        }
    }
?>