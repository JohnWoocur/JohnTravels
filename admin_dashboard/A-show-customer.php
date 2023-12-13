<?php

function show($id){
require 'db-connection.php';
$query="SELECT Image FROM `customer_more_details` WHERE Customer_Id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    $row=mysqli_fetch_assoc($result);
    $img= $row['Image'];
}
else{
    echo "n";
}
return $img;
}

?>