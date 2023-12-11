<?php

include "db-connection.php";


$Pack_Id = $_GET['Pack_Id'];


$result = "UPDATE package  SET Status ='Active' WHERE Pack_Id ={$_GET['Pack_Id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
        echo "updated  successfully";
        //header("Location:A-package-view.php");
    }
else{
    echo "Error";
    }  
$conn->close();



?>