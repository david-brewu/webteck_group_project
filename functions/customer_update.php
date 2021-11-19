<?php
include_once (dirname(__FILE__)).'/../controllers/customer_controller.php';

// check if button is clicked
if(isset($_GET['submit'])){
    // Grab form data
    $customer_id = $_GET['customer_id'];
    $customer_name = $_GET['customer_name'];
    $customer_phone = $_GET['customer_phone'];
    $customer_email = $_GET['customer_email'];
    $customer_address = $_GET['customer_address'];

    // update customer if empty
   
    $updatedCustomer = updateCustomer($customer_id, $customer_name, $customer_phone, $customer_email, $customer_address);
    
    //echo $updatedCustomer;
    if($updatedCustomer){
        header("location: ../view/customer.php?customer_id=".$customer_id);
    }else{
        header("location: ../view/customer_update.php?customer_id=".$customer_id);
    }
}

