<?php
session_start();


 require 'db-connection.php';

 $Packages_name = $_POST['Packages_name'];
 $No_of_people = $_POST['No_of_people'];
 $Phone_number = $_POST['Phone_number'];
 $Checkin_date = $_POST['Checkin_date'];
 $Checkout_date = $_POST['Checkout_date'];
if(isset($_SESSION['id'])){
        $Customer_Id=$_SESSION['id'];
}else{
        echo 's';
}


$sql = "INSERT INTO enquiry(Customer_Id, Packages_name, No_of_people, Phone_number, Checkin_date, Checkout_date) VALUES('$Customer_Id','$Packages_name','$No_of_people','$Phone_number','$Checkin_date','$Checkout_date')";

 $result = mysqli_query($conn,$sql);
 
 if ($result) {
        echo "Enquiry added ";
        header("Location: user-dashboard.php");
        exit; 
    } else {
        echo "Enquiry adding failed please ";
        header("Location: user-enquiry.php");
        exit; 
    }

?>