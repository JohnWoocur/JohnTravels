<?php
    require 'db-connection.php';

if (isset($_GET['Enquiry_Id'])){
    
    $Enquiry_Id= $_GET['Enquiry_Id'];
    
    
     
    $sql = "UPDATE `enquiry` SET `Status`= 'Active' WHERE  `Enquiry_Id`=$Enquiry_Id ";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo"enquiry status updade succseful";
        header("Location:db-enquiry.php");
    }
    else{
        echo "enquiry status updade failed";
    }  
    $conn->close();
}

?>