<?php

function displayPackage($id){ 
require '../admin_dashboard/db-connection.php';
$query="SELECT * FROM package  WHERE Pack_Id='$id'";
    $result = mysqli_query($conn,$query);
    $record=array();
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $record[]=$row;
        }
    }
    return $record;
} 

?>
