<?php
session_start(); 
require '../admin_dashboard/db-connection.php';
$id=$_SESSION['id'];
$First_name=$_POST['firstname'];
$Last_name=$_POST['lastname']; 
$ID=$_POST['ID'];
$Mobile_number=$_POST['phone'];
$Dob=$_POST['dob'];
$Country=$_POST['country'];
$City=$_POST['city'];	
$district=$_POST['district']; 
$Address=$_POST['Address'];	
$About=$_POST['about'];
$Facebook=$_POST['Facebook'];
$Instagram=$_POST['Instagram'];
$Twitter=$_POST['Twitter'];
$Whatsapp = $_POST['Whatsapp'];
$Linkedin = $_POST['Linkedin'];




$query="UPDATE `customer_more_details` SET `First_name`='$First_name',`Last_name`='$Last_name',`Mobile_number`='$Mobile_number',`NIC`='$ID',`City`='$City',`Country`='$Country',`district`='$district',`Address`='$Address',`Dob`='$Dob',`About`='$About',`Facebook`='$Facebook',`Instagram`='$Instagram',`Twitter`='$Twitter',`Whatsapp`='$Whatsapp',`Linkedin`='$Linkedin'  WHERE Customer_Id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header('location:user-edit.php');
    $_SESSION['edsmsg']="Details Updated Success";
}
else{
    header('location:user-edit.php');
    $_SESSION['edemsg']="Details Updated failed";
}
?>