<?php
session_start();

include 'functions.php';
require 'db-connection.php';

$Packages_name = $_POST['Packages_name'];
$No_of_people = $_POST['No_of_people'];
$Phone_number = $_POST['Phone_number'];
$Checkin_date = $_POST['Checkin_date'];
$Checkout_date = $_POST['Checkout_date'];

if (isset($_SESSION['id']) && ($_SESSION['error'])) {
    $Customer_Id = $_SESSION['id'];

    
       
        $sql = "INSERT INTO enquiry(Customer_Id, Packages_name, No_of_people, Phone_number, Checkin_date, Checkout_date) VALUES('$Customer_Id','$Packages_name','$No_of_people','$Phone_number','$Checkin_date','$Checkout_date')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $_SESSION['status'] = "Enquiry added Successfully";
            header("Location: user-dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Enquiry adding failed, please try again";
            header("Location: user-enquiry.php");
            exit();
        }
} else {
    $_SESSION['error'] = "We need your information, please add more details for the enquiry";
    header("Location: user-edit.php");
    exit();
}

unset($_SESSION["error"]);
?>
