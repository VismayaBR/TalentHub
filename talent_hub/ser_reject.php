<?php

include('connect.php');
$del=$_GET['edit_id'];


 mysqli_query($conn,"DELETE  FROM ser_tb WHERE ser_id='$del'");
header('location:ser_view.php')
 
?>