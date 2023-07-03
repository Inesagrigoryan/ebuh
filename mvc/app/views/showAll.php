<!DOCTYPE html>
<html>
<head>
    <title>Show All Data</title>
    <link rel="stylesheet" href="../public/Style.css">
</head>
<body>
    <h1 style="text-align: center;">All Data</h1>
    <?php

    use mvc\app\controllers\GetCars;
    use mvc\app\controllers\DeleteCar;

    require_once('../controllers/GetCars.php');
    require_once('../controllers/DeleteCar.php');

    $data = new GetCars;
    $cars = $data->getAllData();

    if (isset($_POST['add_data'])) {
        header("Location: ../public/index.php");
        $controller->getAllData();
    }

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $dcar = new DeleteCar;
        $dcar->deleteData($id); 
    }
    ?>
    <div class="cars-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car) { ?>
                    <tr>
                        <td><?php echo $car['brand']; ?></td>
                        <td><?php echo $car['model']; ?></td>
                        <td><?php echo $car['year']; ?></td>
                        <td><?php echo $car['price']; ?></td>
                        <td>
                            <a href="showAll.php?id=<?php echo $car['id']; ?>" class="btn btn-delete">Delete</a>
                            <a href="update.php?id=<?php echo $car['id']; ?>" class="btn btn-update">Update</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <form method="POST" action="">
            <input type="submit" name="add_data" value="Add new data" class="add-new form-control">
        </form>
    </div>
</body>
</html>
