<?php

    use mvc\app\controllers\CrudController;

    require_once('../controllers/CrudController.php');

    $data = new CrudController;
    $cars = $data->getAllData();

    if (isset($_GET['id'])){
        $data->deleteData();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Show All Data</title>
    <link rel="stylesheet" href="../public/Style.css">
</head>
<body>
    <h1 style="text-align: center;">All Data</h1>
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
                            <a href="index.php?id=<?php echo $car['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                            <a href="../views/update.php?id=<?php echo $car['id']; ?>" class="btn btn-update">Update</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <form method="POST" action="">
            <a href="../views/addNewData.php" class="add-new form-control">Add New Data</a>
        </form>
    </div>
</body>
</html>
