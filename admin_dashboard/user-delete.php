<?php

include "db-connection.php";


$Customer_Id = $_GET['Customer_Id'];


$result = "UPDATE customers  SET Status ='De-Activated' WHERE Customer_Id ={$_GET['Customer_Id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
        echo "updated  successfully";
        
    }
else{
    echo "Error";
    }  
$conn->close();



?>