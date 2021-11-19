<?php
//connect to customer class
include_once (dirname(__FILE__)).'/../classes/customer_class.php';

// Inserting a new customer
function createCustomer($customer_name, $customer_phone, $customer_email,$customer_address){
    // Create new customer object
    $customer = new Customer;
    // Run query
    $runQuery = $customer->create($customer_name, $customer_phone, $customer_email,$customer_address);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}



function getCustomers(){
    // Create new customer object
    $customer = new Customer;

    // Run query
    $runQuery = $customer->getCustomers();

    if($runQuery){
        $customers = array();
        while($record = $customer->db_fetch()){
            $customers[] = $record;
        }
        return $customers;
    }else{
        return false;
    }
}



function getSingleCustomer($customer_id){
    // Create new customer object
    $customer = new Customer;

    // Run query
    $runQuery = $customer->getSingleCustomer($customer_id);

    if($runQuery){

        $customers = $customer->db_fetch();
        if(!empty($customers)){
            return $customers;
        }else{
            return [];
        }
        
    }else{
        return false;
    }
}

function updateCustomer($customer_id, $customer_name, $customer_phone, $customer_email,$customer_address){
    // Create new customer object
    $customer = new Customer;

    // Run query
    $runQuery = $customer->update($customer_id, $customer_name, $customer_phone, $customer_email,$customer_address);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function deleteCustomer($customer_id){
    // Create new customer object
    $customer = new Customer;

    // Run query
    $runQuery = $customer->delete($customer_id);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}
?>