<?php

include_once ("db-connection.php");

$Numberof_people = $_POST['Numberof_people'];
$Phone_number = $_POST['Phone_number'];
$Package_name = $_POST['Package_name'];
$Checkin_date = $_POST['Checkin_date'];
$Checkout_date = $_POST['Checkout_date'];

$query = "SELECT * FROM enquiry  WHERE condition = 'Enquiry_Id = $id'";
each $query;

while (fetch_array($query))