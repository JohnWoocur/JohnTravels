<?php
include("../admin_dashboard/db-connection.php");


$customer_id = $_GET['Customer_Id'];
$pack_id = $_GET['Pack_Id'];

$sql = "INSERT INTO `user-wish` (Customer_Id, Pack_Id) VALUES ('$customer_id', '$pack_id')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully package added in wishlist";
	header("Location: user-packages.php");
	
} else {
    echo"wish add failed packages id not found";
    header("Location: user-packages.php");

}
$conn->close();

?>


