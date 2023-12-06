<?php

        include_once ("db-connection.php");

$Numberof_people = $_POST['Numberof_people'];
$Phone_number = $_POST['Phone_number'];
$Package_name = $_POST['Package_name'];
$Checkin_date = $_POST['Checkin_date'];
$Checkout_date = $_POST['Checkout_date'];


$check = mysqli_query($conn,"INSERT INTO enquiry(Numberof_people, Phone_number, Package_name, Checkin_date, Checkout_date) VALUES('$Numberof_people','$Phone_number','$Package_name','$Checkin_date','$Checkout_date')");
if($check)
{
	echo "done";
}
else{
    echo "failed";
     }
?> 

