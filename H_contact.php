<?php 

require 'db-connection.php';

$Contact_Id =$_POST['Contact_Id'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];

$queryy="INSERT INTO contact_us(Name, Email, Message) VALUES('$Name','$Email','$Message')";
$result=mysqli_query($conn,$queryy);
if($result){
    header('location:contact.php');
}
else{
    header('location:contact.php');
}

?>
