<?php

include_once ("db-connection.php");
    if(isset($_GET['id']))
    {
    $Enquiry_id = mysqli_real_escape_string($con, $_GET['id']);
     $query = "SELECT * FROM enquiry" ;
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
         {
            $Enquiry = mysqli_fetch_array($query_run);
            {
                foreach($query_run as $Enquiry)
                {
                    ?>
                    <tr>
                        
                    <td><?= $Enquiry ['user'];?></td>
                    <td><?= $Enquiry ['Check_in'];?></td>
                    <td><?= $Enquiry ['Check_out'];?></td>
                    <td><?= $Enquiry ['Destination'];?></td>
                    <td><?= $Enquiry ['Id'];?></td>
                    <td><?= $Enquiry ['status'];?></td>
                    <td><?= $Enquiry ['Enquiry'];?></td>
                    <td><?= $Enquiry ['People'];?></td>
                    <td>
                        <a href="" class="btn btn-sucecess btn-sm"></a>
                    </td>
                    </tr>
                    <?php
                }
            }


}
      else
         {
             echo "<h4>No Such Id Found</h4>";
         }
}
?>