<?php
    namespace mvc\app\models;

    use mvc\app\models\ModelDb;
    use mvc\app\models\GetDataInterface;

    require_once('../models/ModelDb.php');
    require_once('../models/GetDataInterface.php');

    class GetData extends ModelDb implements GetDataInterface
    {
        public function __construct() 
        {
            parent::__construct();
        }
        
        public function getAllData() {
            $query = "SELECT * FROM cars";
            $result = $this->getConnection()->query($query);
            
            $data = array();
            
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
        
            return $data;
        }
    }

?>