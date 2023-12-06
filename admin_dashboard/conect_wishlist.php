<?php
    include'db-connection.php';

if (isset($_GET['pack_id'])){
    
    $pack_id=$_GET['pack_id'];
    $wish="hello ";
    $sql = "UPDATE `package` SET `wish`='$wish' WHERE pack_id=1";

    if ($conn->query ($sql)=== TRUE) {
        echo"update succseful";
        header("Location:db-wishlist.php");
    }
    else{
        echo "Error";
    }  
    $conn->close();
}

?>