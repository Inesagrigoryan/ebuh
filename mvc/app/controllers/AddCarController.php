<?php
    namespace mvc\app\controllers;

    use mvc\app\models\AddCar;
    use mvc\app\controllers\AddCarInterface;

    require_once('../models/AddCar.php');
    require_once('../controllers/AddCarInterface.php');

    class AddCarController implements AddCarInterface {
        public function addCarData($brand, $model, $year, $price) {
            if (empty($brand) || empty($model) || empty($year) || empty($price)) {
                echo "Error: All fields are required.";
                return;
            } else {
                $saveData = new AddCar;
                $isSaved = $saveData->saveCar($brand, $model, $year, $price);
            }
            if($isSaved) {
                echo "Data saved successfully.";
            } else {
                echo "There is an error!!";
            }
        }
    }
?>