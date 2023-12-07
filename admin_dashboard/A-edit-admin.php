<?php 
 require 'db-connection.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ID=$_POST['id'];
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $phone=$_POST['phone'];//$date=$_POST['date'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="UPDATE `admins` SET `First_name`='$Firstname',`Last_name`='$Lastname',`Mobile_number`='$phone',`City`='$city',`Country`='$country',`Email`='$email',`Password`='$password' WHERE Admin_Id='$ID'";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "done";
    }else{
        echo "failed";
    }
 }
 
 

?>