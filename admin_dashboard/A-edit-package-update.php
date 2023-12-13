<?php
require '../admin_dashboard/db-connection.php';
session_start();
$id=$_POST['id'];
 
$Title=$_POST['name'];
$Group=$_POST['size'];
$Description=$_POST['description'];
$Day=$_POST['day'];
$Night=$_POST['night'];
$Category=$_POST['category'];
$Date=$_POST['date']; 
$Saleprice=$_POST['saleprice'];
$Price=$_POST['price'];	
$Discount=$_POST['discount'];
	
$Map=$_POST['map'];
$Api=$_POST['apikey'];
$Popular=$_POST['popular'];
$Status=$_POST['status'];
$Wish=$_POST['wish'];

$imgName=$_FILES["myfile"]["name"];

$imgFile=$_FILES["myfile"]["tmp_name"];  

$path = "package/".$imgName;
move_uploaded_file($imgFile,$path);


$query="UPDATE `package` SET `Pack_title`='$Title',`Pack_img`='$imgName',`Description`='$Description',`Group_size`='$Group',`Days`='$Day',`Night`='$Night',`Sale_price`='$Saleprice',`Reqular_price`='$Price',`Discount`='$Discount',`Category`='$Category',`Map`='$Map',`Api_key`='$Api',`Popular`='$Popular',`Status`='$Status',`Trip_date`='$Date',`Wish`='$Wish' WHERE Pack_Id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header('location:db-edit-package.php');
    $_SESSION['Smsg']="package updated success";
}
else{
    header('location:db-edit-package.php');
    $_SESSION['Emsg']="package updated Failed";
}
?>