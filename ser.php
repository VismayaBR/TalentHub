<?php
                      include'docs/connect.php';
                      session_start();
                    	$s=$_GET['pid'];

                      $id =$_SESSION["user_id"];

                   $t_query=mysqli_query($conn,"SELECT * FROM customer_reg_tb WHERE login_id='$id'");

                   $row=mysqli_fetch_assoc($t_query);
                   $reg_id=$row['reg_id'];

                  mysqli_query($conn,"INSERT INTO service_request_tb(ser_id,reg_id)VALUES('$s','$reg_id')");
                 
                  echo"<script>alert('requested')</script>";

                   echo"<script>window.location.href='service.php'</script>";

                  ?>