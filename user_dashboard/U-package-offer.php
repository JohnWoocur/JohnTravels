<?php
 
    require 'db-connection.php';
    
    $id =1;
    $query=" SELECT * FROM package";

    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array ($result, MYSQLI_ASSOC)){      
?>


<div>
<h3><?php echo $row["Discount"]?></h3>
<h3><?php echo $row["Pack_title"]?></h3>
<hr>
</div>



<?php       
}
?>
