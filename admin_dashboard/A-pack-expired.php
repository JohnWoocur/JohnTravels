<?php
session_start();
include "db-connection.php";


$Pack_Id = $_GET['Pack_Id'];

$query="UPDATE `package` SET `Status`='Expired' WHERE Pack_Id='$Pack_Id'";
$result=mysqli_query($conn,$query);
if ($result) 
    {
        $_SESSION['expaired']="package expaired";
        header("Location:db-package-expired.php");
    }
else{
        $_SESSION['expaired']="package expaired failed";
        header("Location:db-package-expired.php");
    }  
    
?>