<?php
//connect to customer controller
include_once (dirname(__FILE__)).'/../controllers/customer_controller.php';

if(isset($_GET['submit'])){
    // Grab form inputs
    $customer_name = $_GET['customer_name'];
    $customer_phone = $_GET['customer_phone'];
    $customer_email = $_GET['customer_email'];
    $customer_address = $_GET['customer_address'];

    // create customer if not empty
    $newCusomer = createCustomer($customer_name, $customer_phone, $customer_email, $customer_address);
    if($newCusomer){
        echo "success";
       // header("location: ../index.php");
    }
    else echo "failed";
}