<?php
include_once ("db-connection.php");
session_start();

	$filename = $_FILES["Pack_img"]["name"];

    $tempname = $_FILES["Pack_img"]["tmp_name"];  

    $folder = "package/".$filename; 
		
$Pack_title = $_POST['Pack_title'];
$Description = $_POST['Description'];
$Location = $_POST['Location'];
$Place_one = $_POST['Place_one'];
$Place_two = $_POST['Place_two'];
$Place_three = $_POST['Place_three'];
$Place_four = $_POST['Place_four'];
$Group_size = $_POST['Group_size'];
$Trip_date = $_POST['Trip_date'];
$Days = $_POST['Days'];
$Night = $_POST['Night'];
$Reqular_price = $_POST['Reqular_price'];
$Discount = $_POST['Discount'];
$Category = $_POST['Category'];
$Map = $_POST['Map'];
$Api_key = $_POST['Api_key'];
$Sale_price =$Reqular_price-(($Reqular_price/100)*$Discount);



$check = mysqli_query($conn,"INSERT INTO package(Pack_title, Pack_img, Description, Location, Place_one, Place_two, Place_three, Place_four, Group_size, Trip_date, Days, Night, Sale_price, Reqular_price, Discount, Category, Map, Api_key) VALUES('$Pack_title','$filename','$Description','$Location','$Place_one','$Place_two','$Place_three','$Place_four','$Group_size','$Trip_date','$Days','$Night','$Sale_price','$Reqular_price','$Discount','$Category','$Map','$Api_key')");
if (move_uploaded_file($tempname, $folder)) {

        $_SESSION['addpack']="Package added success";
        header("Location: db-add-package.php");

        }else{

        $_SESSION['addpack']="Package added success";
        header("Location: db-add-package.php");

    }
/*
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
*/
?>

