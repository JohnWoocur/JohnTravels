<?php
    require'db-connection.php';

if (isset($_GET['id'])){
    
    $Pack_Id =$_GET['id'];
    echo $Pack_Id;
    $Wish="false";
    $sql = "UPDATE `package` SET `Wish`='$Wish' WHERE Pack_Id=$Pack_Id";

    if ($conn->query ($sql)=== TRUE) {
        echo"update succseful";
        //header("Location:db-wishlist.php");
    }
    else{
        echo "Error";
    }  
    $conn->close();
}

?>