<?php
    namespace mvc\app\public;

    use mvc\app\controllers\AddCarController;
    use mvc\app\controllers\GetCars;

    require_once('../controllers/AddCarController.php');
    require_once('../controllers/GetCars.php');

    $db = new AddCarController;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        $db->addCarData($brand, $model, $year, $price);    
    }
   
    // $model = new Model($connection);
 

    // Check if the button is clicked
    if (isset($_POST['show_data'])) {
        $controller = new GetCars();  
        header("Location: ../views/showAll.php");
        $controller->getAllData();
    }
   
    // $db->saveCar('Toyota', 'Corola', '2008', '11000');
    // $db->getCar();
    // $car = new Car;
    // $smth = $car->getId();
    // var_dump($smth);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="./Style.css">

        <title>the Cars Inventory Management</title>
    </head>
    <body>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <div class="car-container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-5 ">
                    <div class="add car shadow">
                        <div class="car-header">
                            <h1>Add new car</h1>
                        </div>
                        <div class="car-body">
                            <form method="POST">
                                <label for="">Brand</label>
                                <input type="text" name="brand" placeholder="Enter brand" class="form-control">
                                <label for="">Model</label>
                                <input type="text" name="model" placeholder="Enter Model" class="form-control">
                                <label for="">Year</label>
                                <input type="number" name="year" min="1900" max="2099" placeholder="Enter Year" class="form-control">
                                <label for="">Price</label>
                                <input type="text" name="price" placeholder="Enter Price" class="form-control">
                                <br>
                                <input type="submit" value="Save" class="btn btn-success form-control">
                            </form>
                        </div>
                        <form method="POST" action="">
                            <input type="submit" name="show_data" value="Show All Data" class="show-all form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
