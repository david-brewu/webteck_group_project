<?php
include_once (dirname(__FILE__)).'/../controllers/customer_controller.php';

if(isset($_GET['customer_id'])){
    $customer = getSingleCustomer($_GET['customer_id']);
}else{
    header("location: ../index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>Blog Customers</title>

    
  </head>
  <body>
    <div class="container container-custom">
    <a class="btn btn-primary" href="../index.php">Back to Home</a> 
        <h1>Edit</h1>
        <h6>Update your Blog Customers</h6>
        <form method="_GET" action="../functions/customer_update.php">
            <div class="mb-3">
                <label for="name" class="form-label">Customer Name</label>
                <input type="text" name="customer_name" class="form-control" id="name" value="<?= $customer['customer_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Customer Phone</label>
                <textarea class="form-control" name="customer_phone" id="phone" cols="30" rows="10" required> <?= $customer['customer_phone'] ?> </textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Customer Email</label>
                <input type="text" name="customer_email" class="form-control" id="email" value="<?= $customer['customer_email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Customer Address</label>
                <textarea class="form-control" name="customer_address" id="address" cols="30" rows="10" required> <?= $customer['customer_address'] ?> </textarea>
            </div>
            <input type="hidden" name="customer_id" value="<?= $customer['customer_id'] ?>">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
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