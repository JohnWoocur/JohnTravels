<?php

    function displayoffer($id){ 
        require 'db-connection.php';
        // $id=$_GET['id'];
        //$id=1;
        $query="SELECT * FROM package WHERE Discount Pack_Id='$id'";
            $result = mysqli_query($conn,$query);
            $record=array();
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $record[]=$row;
                }
            }
            return $record;
        }
        ?>
