<?php
include'../docs/connect.php';
   session_start();
 $id =$_GET['reg'];
 mysqli_query($conn,"UPDATE order_product_tb SET status='1' WHERE reg_id='$id'");
 echo "<script>window.location.href='message_seen.php?id=$id'</script>";