<?php
 
function displayUser($id){  
require '../admin_dashboard/db-connection.php';
// $id=$_GET['id'];
//$id=1;
$query="SELECT * FROM customer_more_details  WHERE Customer_Id='$id'";
    $result = mysqli_query($conn,$query);
    $record=array();
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $record[]=$row;
        }
    }
    return $record;
}

function check($id){ 
    require '../admin_dashboard/db-connection.php';
    $query="SELECT * FROM customer_more_details  WHERE Customer_Id='$id'";
        $result = mysqli_query($conn,$query);
        $record=array();
        if(mysqli_num_rows($result)>0){
            return 'true';
            //echo 'true';
        }
        else{
            return 'false';
            //echo 'false';
        }
    }
?>
