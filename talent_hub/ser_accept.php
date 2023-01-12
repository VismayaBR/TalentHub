<?php

session_start();
include('connect.php');
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `ser_tb` SET `status`=1 WHERE ser_id='$edd'");

echo"<script>alert('service accepted');</script>";

echo"<script>window.location.href='ser_view.php';</script>";
?>