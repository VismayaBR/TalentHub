<?php

include('connect.php');
$del=$_GET['edit_id'];


 mysqli_query($conn,"DELETE  FROM customer_reg_tb WHERE reg_id='$del'");
header('location:customer_reg.php')
 
?>