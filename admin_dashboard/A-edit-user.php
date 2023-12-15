<?php 
 require 'db-connection.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ID=$_POST['id'];
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $nic=$_POST['ID'];
    $phone=$_POST['phone'];//$date=$_POST['date'];
    $DOB=$_POST['date'];
    $country=$_POST['country'];
    $district=$_POST['district'];
    $City=$_POST['City'];
    $Address=$_POST['Address'];
    $about=$_POST['about'];

    $imgName = $_FILES["myfile"]["name"];

    $imgFile = $_FILES["myfile"]["tmp_name"];  

    $path = "admins/".$imgName;
    move_uploaded_file($imgFile,$path);

    $query="UPDATE `customer_more_details` SET `First_name`='$First_name',`Last_name`='$Last_name',`Mobile_number`='$Mobile_number',`NIC`='$ID',`City`='$City',`Country`='$Country',`district`='$district',`Address`='$Address',`Dob`='$Dob',`About`='$About', `Image`='$imgName'  WHERE Customer_Id='$id'";
    $result=mysqli_query($conn,$query);
    if($result){
        header('location:user-edit.php');
        $_SESSION['Smsg']="Details Updated Success";
    }
    else{
        header('location:user-edit.php');
        $_SESSION['Emsg']="Details Updated failed";
    }
}
 

?>