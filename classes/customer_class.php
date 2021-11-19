<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class Customer extends db_connection {
    public function create($customer_name, $customer_phone, $customer_email,$customer_address){
        // sql query
        $sql = "INSERT INTO `customers`(`customer_name`, `customer_phone`,`customer_email`, `customer_address`) VALUES ('$customer_name','$customer_phone','$customer_email','$customer_address')";

        // run query
        return $this->db_query($sql);
    }

    public function getCustomers(){
        //sql query
        $sql = "SELECT * FROM `customers`";

        //run query
        return $this->db_query($sql);
    }
    

    public function getSingleCustomer($customer_id){
        // sql query
        $sql = "SELECT * FROM `customers` WHERE `customer_id`='$customer_id'";

        // run query
        return $this->db_query($sql);
    }

    public function update($customer_id, $customer_name, $customer_phone, $customer_email,$customer_address){
        // sql query
        $sql = "UPDATE `customers` SET `customer_name`='$customer_name',`customer_phone`='$customer_phone',`customer_email`='$customer_email',`customer_address`='$customer_address' WHERE `customer_id`='$customer_id'";

        // run query
        return $this->db_query($sql);
    }

    public function delete($customer_id){
        // sql query
        $sql = "DELETE FROM `customers` WHERE `customer_id`='$customer_id'";

        // run query
        return $this->db_query($sql);
    }
}

?>