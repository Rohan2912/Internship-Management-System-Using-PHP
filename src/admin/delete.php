<?php

include 'connection.php';

$id = @$_GET['id'];

$delete = " DELETE FROM u_reg WHERE u_id LIKE $id ";

$del=mysqli_query($conn, $delete);

if($del)
{   
    echo "<script>window.open('view.php?deleted=ID: $id has been Deleted..!','_self')</script>";
  
}

?>