<?php

session_start();
include('connect.php');
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `student_reg_tb` SET `status`=1 WHERE reg_id='$edd'");

echo"<script>alert('registration accepted');</script>";

echo"<script>window.location.href='student_reg.php';</script>";
?>