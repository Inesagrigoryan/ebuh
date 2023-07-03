<?php

namespace mvc\app\models;

use mvc\app\models\AddCarInterface;
use mvc\app\models\ModelDb;

require_once('../models/ModelDb.php');
require_once('../models/AddCarInterface.php');

class AddCar extends ModelDb implements AddCarInterface
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function saveCar($brand, $model, $year, $price)
    {
        $query = "INSERT INTO cars (brand, model, year, price)
                  VALUES ('$brand', '$model', '$year', '$price')";
        $result = $this->getConnection()->query($query);

        if($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>