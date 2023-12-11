<?php
 require 'db-connection.php';
    
    //$id=$_GET['id'];
    $id=1;
    $query="UPDATE `enquiry` SET `Status`='approved' WHERE Enquiry_Id='$id'";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "Approved";
    }else{
        echo "failed";
    }



?>