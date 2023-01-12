<?php

session_start();
include('../docs/connect.php');
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `service_request_tb` SET `status`=1 WHERE req_id='$edd'");

echo"<script>alert('registration aproved');</script>";

echo"<script>window.location.href='../docs/view_req.php';</script>";
?>