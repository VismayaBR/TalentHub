<?php

include('connect.php');
$del=$_GET['edit_id'];


 mysqli_query($conn,"DELETE  FROM student_reg_tb WHERE reg_id='$del'");
header('location:student_reg.php')
 
?>