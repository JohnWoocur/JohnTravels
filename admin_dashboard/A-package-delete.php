<?php
include 'db-connection.php';

if (isset($_GET['Pack_Id'])) {
   
    $Pack_Id = $_GET['Pack_Id'];
     
    $status = "Delete";
    $sql = "UPDATE `package` SET `Status` = '$status' WHERE `Pack_Id` = $Pack_Id";
  
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
