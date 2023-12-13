<?php

// session_start();


function displayUser(){
    require '../admin_dashboard/db-connection.php';
    $id=$_SESSION["id"];
    //$id=1;
    $query="SELECT * FROM customers WHERE Customer_Id ='$id'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
    }
    else{
        echo "error"; 
    }
    return $row["Username"];
}

?>