<?php

// session_start();


function displayAdmin(){
    require '../admin_dashboard/db-connection.php';
    $id=$_SESSION["aid"];
    //$id=1;
    $query="SELECT * FROM admins WHERE Admin_Id ='$id'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
    }
    else{
        echo "error"; 
    }
    return $row["First_name"];
}

?>