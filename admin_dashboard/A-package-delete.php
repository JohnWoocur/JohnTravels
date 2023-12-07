<?php
include 'db-connection.php';

if (isset($_GET['pack_id'])) {
   
    $pack_id = $_GET['pack_id'];
     // $sql = "DELETE FROM `package` WHERE Pack_Id = $pack_id";
    $status = "Delete";
    $sql = "UPDATE `package` SET `Status` = '$status' WHERE `Pack_Id` = $pack_id";
  
    if ($conn->query($sql) === TRUE) {
        echo "Package deleted successfully";
        header("Location: db-package-active.php");
    } else {
        echo "Error deleting package: " . $conn->error;
        header("Location: db-package-active.php");
    }
    $conn->close();
} else

?>
