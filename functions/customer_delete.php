<?php
include_once (dirname(__FILE__)).'/../controllers/customer_controller.php';

//if(isset($_GET['customer_id'])){
    $deleteCustomer = deleteCustomer($_GET['customer_id']);
    if($deleteCustomer){
        echo "success";
        header("location: ../index.php");
    }else{
        echo "something went wrong";
    }
//}