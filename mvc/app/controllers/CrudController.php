<?php
    namespace mvc\app\controllers;

    use mvc\app\models\Car;
    use mvc\app\controllers\CrudInterface;

    require_once('../models/Car.php');
    require_once('../controllers/CrudInterface.php');
    
    class CrudController implements CrudInterface   
    {
        private $carModel = NULL;

        public function __construct() 
        {
            $this->carModel = new Car();
        }

        public function redirect($location) 
        {
            header('Location: '.$location);
        }

        public function getAllData() 
        {
            $data = $this->carModel->getAllData();
            return $data;
        }

        public function addCarData() 
        {
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $year = $_POST['year'];
            $price = $_POST['price'];

            if (empty($brand) || empty($model) || empty($year) || empty($price)) {
                echo "Error: All fields are required.";
                return;
            } else {
                $isSaved = $this->carModel->addCar($brand, $model, $year, $price);
            }

            if($isSaved) {
                echo "Data saved successfully.";
            } else {
                echo "There is an error!!";
            }
        }

        public function deleteData() 
        {
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                $del = $this->carModel->deleteData($id);
                $this->redirect('index.php');

                if ($del) {
                    echo "Data deleted successfully.";
                } else {
                    echo "Error: Failed to delete data.";
                }
            }
        }

        public function updateData() 
        {
            if (isset($_POST['updateBtn'])) {
                $id = $_GET['id'];
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $year = $_POST['year'];
                $price = $_POST['price'];

                $upd = $this->carModel->updateData($id, $brand, $model, $year, $price);
                
                $this->redirect('../public/index.php');

                if($upd) {
                    echo "Data updated successfully.";
                } else {
                    echo "There is an error!!";
                }
            }
        }
    }
?>