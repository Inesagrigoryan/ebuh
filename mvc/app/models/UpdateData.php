<?php

namespace mvc\app\models;

use mvc\app\models\ModelDb;
use mvc\app\models\UpdateDataInterface;

require_once('../models/ModelDb.php');
require_once('../models/UpdateDataInterface.php');

class UpdateData extends ModelDb implements UpdateDataInterface
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function updateData($id, $brand, $model, $year, $price) {

        $query = "UPDATE cars SET brand = '$brand', model = '$model', year = '$year', price = '$price' WHERE id = '$id'";
        $result = $this->getConnection()->query($query);

        if($result) {
            return true;
        } else {
            return false;
        }
    }
}