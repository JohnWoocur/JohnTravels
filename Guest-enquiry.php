<?php 

require 'db-connection.php';

$Guest_enquriy_Id =$_POST['Guest_enquriy_Id'];
$Guest_Name=$_POST['Guest_Name'];
$Phone_Number=$_POST['Phone_Number'];
$Destination=$_POST['Destination'];
$No_of_people=$_POST['No_of_people'];
$Date=$_POST['Date'];

$queryy="INSERT INTO guest_enquiry(Guest_Name, Phone_Number, Destination, No_of_people, Date) VALUES('$Guest_Name','$Phone_Number','$Destination','$No_of_people','$Date')";
$result=mysqli_query($conn,$queryy);
if($result){
    header('location:index.php');
}
else{
    header('location:index.php');
}

?>
