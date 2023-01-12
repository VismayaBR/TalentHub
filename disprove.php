<?php

include('../docs/connect.php');
$del=$_GET['edit_id'];


 mysqli_query($conn,"DELETE  FROM service_request_tb WHERE req_id='$del'");

 // mysqli_query($conn,"DELETE  FROM pal_tb WHERE login_id='$del'");


 echo"<script>alert('registration disaproved');</script>";
echo"<script>window.location.href='../docs/view_req.php';</script>";
?>
