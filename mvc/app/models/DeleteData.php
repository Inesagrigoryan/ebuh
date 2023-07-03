<?php

namespace mvc\app\models;

use mvc\app\models\ModelDb;
use mvc\app\models\DeleteDataInterface;

require_once('../models/ModelDb.php');
require_once('../models/DeleteDataInterface.php');

class DeleteData extends ModelDb implements DeleteDataInterface
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function deleteData($id) {
        
        $query = "DELETE FROM cars WHERE id = '$id'";

        $result = $this->getConnection()->query($query);

        if($result) {
            return true;
        } else {
            return false;
        }
    }
}