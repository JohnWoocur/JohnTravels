<?php

        include_once ("db-connection.php");

$No_of_people = $_POST['No_of_people'];
$Phone_number = $_POST['Phone_number'];
$Packages_name = $_POST['Packages_name'];
$Checkin_date = $_POST['Checkin_date'];
$Checkout_date = $_POST['Checkout_date'];



$check = mysqli_query($conn,"INSERT INTO enquiry(No_of_people, Phone_number, Packages_name, Checkin_date, Checkout_date  ) VALUES('$No_of_people','$Phone_number','$Packages_name','$Checkin_date','$Checkout_date')");
if($check)
{
	echo "done";
}
else{
    echo "failed";
     }
?> 

