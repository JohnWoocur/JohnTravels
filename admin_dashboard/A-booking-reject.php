<?php
require 'db-connection.php';
$id=$_GET['id'];
//$id=1;


$query="UPDATE `package_booking` SET `Status`='reject' WHERE Booking_Id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header('location:db-booking.php');
}
else{
    header('location:db-booking.php');
}

?>