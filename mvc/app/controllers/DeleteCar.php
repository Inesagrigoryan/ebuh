<?php
    namespace mvc\app\controllers;

    use mvc\app\models\DeleteData;
    use mvc\app\controllers\DeleteCarInterface;

    require_once('../models/DeleteData.php');
    require_once('../controllers/DeleteCarInterface.php');

    class DeleteCar implements DeleteCarInterface {
        private $model;

        public function __construct() {
            $this->model = new DeleteData;
        }
        
        public function deleteData($id) {
            $del = $this->model->deleteData($id);
            if($del) {
                echo "Data deleted successfully.";
            } else {
                echo "There is an error!!";
            }
        }
    }
?>