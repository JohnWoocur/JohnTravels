<?php
require 'db-connection.php';

$Packages_name = $_POST['Packages_name'];
$No_of_people = $_POST['No_of_people'];
$Phone_number = $_POST['Phone_number'];
$Checkin_date = $_POST['Checkin_date'];
$Checkout_date = $_POST['Checkout_date'];

// $Packages_name = "aa";
// $No_of_people = "";
// $Phone_number = "121";
// $Checkin_date = "12.12.2000";
// $Checkout_date = "21.12.2222";


$sql="INSERT INTO `enquiry`(`Packages_name`, `No_of_people`, `Phone_number`, `Checkin_date`, `Checkout_date`) VALUES('$Packages_name','$No_of_people','$Phone_number','$Checkin_date','$Checkout_date')";
$result = mysqli_query($conn,$sql);
if($result)
{
	echo "Enquiry added ";
        header("Location: user-dashboard.php");
}
else{
    echo "Enquiry adding failed please ";
    header("Location: user-enquiry.php");
     }
?> 
