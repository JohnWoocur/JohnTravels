<?php
include_once ("db-connection.php");

$Pack_title = $_POST['Pack_title'];
$Pack_img = $_POST['Pack_img'];
$Description = $_POST['Description'];
$Group_size = $_POST['Group_size'];
$Trip_date = $_POST['Trip_date'];
$Days = $_POST['Days'];
$Night = $_POST['Night'];
//$Sale_price = $_POST['Sale_price'];
$Reqular_price = $_POST['Reqular_price'];
$Discount = $_POST['Discount'];
$Category = $_POST['Category'];
$Map = $_POST['Map'];
$Api_key = $_POST['Api_key'];
$Sale_price =$Reqular_price-(($Reqular_price/100)*$Discount);



$check = mysqli_query($conn,"INSERT INTO package(Pack_title,Pack_img, Description, Group_size, Trip_date, Days, Night, Sale_price, Reqular_price, Discount, Category, Map, Api_key) VALUES('$Pack_title','$Pack_img','$Description','$Group_size','$Trip_date','$Days','$Night','$Sale_price','$Reqular_price','$Discount','$Category','$Map','$Api_key')");
if($check)
{	
	echo "Package Added successfully!";
	header("Location: db-add-package.php");
}
else 
{
  echo "Package Added failure!";
  header("Location: db-add-package.php");
}
?>