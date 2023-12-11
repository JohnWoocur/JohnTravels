<?php
require '../admin_dashboard/db-connection.php';

$id=$_POST['id'];

$Title=$_POST['name'];
$Group=$_POST['size'];
$Description=$_POST['description'];
$Day=$_POST['day'];
$Night=$_POST['night'];
$Category=$_POST['category'];
$Date=$_POST['date']; 
$Price=$_POST['price'];	
$Discount=$_POST['discount'];
$Myfile=$_POST['myfile'];	
$Map=$_POST['map'];
$Api=$_POST['apikey'];
$Popular=$_POST['popular'];
$Status=$_POST['status'];

$query="UPDATE `package` SET `Pack_title`='$Title',`Pack_img`='$Myfile',`Descryption`='$Description',`Group_size`='$Group',
`Days`='$Day',`Night`='$Night',`Date`='$Date',`Reqular_price`='$Price',`Discount`='$Discount'
,`Category`='$Category',`Map`='$Map',`Api_key`='$Api',`Popular`='$Popular',`Status`='$Status' WHERE Pack_Id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    echo "done";
}
else{
    echo "fail";
}
?>