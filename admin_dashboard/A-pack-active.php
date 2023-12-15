<?php

include "db-connection.php";


$Pack_Id = $_GET['Pack_Id'];


$result = "UPDATE package  SET Status ='Active' WHERE Pack_Id ={$_GET['Pack_Id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
        header("Location:A-package-view.php");
    }
else{
    header("Location:A-package-view.php");
    }  
$conn->close();



?>