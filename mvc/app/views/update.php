<?php
    use mvc\app\controllers\CrudController;

    require_once('../controllers/CrudController.php');

    $data = new CrudController;

    if (isset($_POST['updateBtn'])) 
    { 
        $data->updateData();
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/Style.css">
    </head>
    <body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <div class="car-container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 ">
                <div class="add car shadow">
                    <div class="car-header">
                        <h1>Update Car </h1>
                    </div>
                    <div class="car-body">
                        <form method="POST">
                            <label for="">Brand</label>
                            <input type="text" name="brand" placeholder="Enter brand" class="form-control" required>
                            <label for="">Model</label>
                            <input type="text" name="model" placeholder="Enter Model" class="form-control" required>
                            <label for="">Year</label>
                            <input type="number" name="year" min="1900" max="2099" placeholder="Enter Year" class="form-control" required>
                            <label for="">Price</label>
                            <input type="text" name="price" placeholder="Enter Price" class="form-control" required>
                            <br>
                            <input type="submit" name="updateBtn" value="Update" class="btn-update sec">
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