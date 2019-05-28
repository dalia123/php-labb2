<?php

/*
 * Visar alla customer*/
function getcustomer($conn){
    $query = "SELECT * FROM customer INNER JOIN spel ON customer.spelId = spel.spelId";

     //$query = "SELECT * FROM customer ORDER BY customerName ASC";
    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    return $result;
}
/*
 * Visar alla kunder
*/
function getcustomer($conn){
    $query = "SELECT * FROM customer ORDER BY customerName";
     //$query = "SELECT * FROM customer ORDER BY customerName ASC";
    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    return $result;
}

/*
 * Hämtar en kund    //Create table , oop
 */
function getcustomerData($conn,$customerId){
    $query = "SELECT * FROM customer
			WHERE spelId=".$customerId;

    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    $row = mysqli_fetch_assoc($result);

    return $row;
/*
 * Sparar en kund
*/
function savecustomer($conn){
    $date = date("Y-m-d H:i:s");
    //$customerId = escapeInsert($conn,$_POST['txtcustomerid']);
    $customerName = escapeInsert($conn,$_POST['txtNameCustomer']);
    $customerEmail = escapeInsert($conn,$_POST['txtcustomerEmail']);
    $customerPassword = escapeInsert($conn,$_POST['txtcustomerPassword']);


    $query = "INSERT INTO customer
			(customerName, customerEmail, customerPassword)
			VALUES('$customerName','$customerEmail', '$customerPassword')";


    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    $insId = mysqli_insert_id($conn);

    return $insId;
}
