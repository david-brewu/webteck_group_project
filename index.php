<?php
//connect to database class
include_once (dirname(__FILE__)).'/./controllers/customer_controller.php';

$customers = getCustomers();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <title>Blog Customer</title>

    
  </head>
  <body>
    <div class="container container-custom">
        <h1>Welcome!</h1>
        <h6>Registor as a Customer</h6>
        <form method="GET" action="./functions/customer_create.php">
            <div class="mb-3">
            <label for="name" class="form-label">Customer Name</label>
                <input type="text" name="customer_name" class="form-control" id="name" required>
                <label for="name" class="form-label">Customer Phone</label>
                <input type="text" name="customer_phone" class="form-control" id="name" required>
                <label for="name" class="form-label">Customer Email</label>
                <input type="text" name="customer_email" class="form-control" id="name" required>
                <label for="name" class="form-label">Customer Address </label>
                <input type="text" name="customer_address" class="form-control" id="name" required> <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        <div>
            <h3 class="mt-5">Your Customers</h3>
            <ul class="list-group">
                <?php
                    foreach($customers as $key => $value){
                ?>
                        <li class="list-group-item"> <?= $value['customer_name'] ?>  
                            <a href="./functions/customer_delete.php?customer_id=<?= $value['customer_id'] ?>" class="btn btn-danger btn-custom"> Delete</a> 
                            <a href="./view/customer_update.php?customer_id=<?= $value['customer_id'] ?>" class="btn btn-secondary btn-custom"> Update</a> 
                            <a href="./view/customer.php?customer_id=<?= $value['customer_id'] ?>" class="btn btn-primary btn-custom">View</a>
                        </li>
                        
                <?php
                    }
                ?>
            </ul>
            
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>