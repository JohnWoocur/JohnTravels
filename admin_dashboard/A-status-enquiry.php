<?php
session_start();
require 'db-connection.php';

if (isset($_GET['Enquiry_Id'])){
    
    $Enquiry_Id= $_GET['Enquiry_Id'];
    
    
     
    $sql = "UPDATE `enquiry` SET `Status`= 'Active' WHERE  `Enquiry_Id`=$Enquiry_Id ";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        $_SESSION['enquiry']="Enquiry activated";
        header("Location:db-enquiry.php");
    }
    else{
        $_SESSION['enquiry']="Enquiry activated failed";
        header("Location:db-enquiry.php");
    }  
    $conn->close();
}

?>