<?php
 require 'db-connection.php';
 session_start();
    
    $id=$_GET['id'];
    //$id=1;
    $query="UPDATE `package_booking` SET `Status`='Approved' WHERE Booking_Id='$id'";
    $result=mysqli_query($conn,$query);

    if($result){
        header('location:db-booking.php');
        $_SESSION['Smsg']="Approved Success";
    }else{
        header('location:db-booking.php');
        $_SESSION['Emsg']="Rejected Success";
    }



?>