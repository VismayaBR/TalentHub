
<?php
session_start();

include('connect.php');
if(isset($_SESSION["user_id"]))
{
  header("location:dashboard.php");
}

if (isset($_POST['submit']))
{
  $username=$_POST['user'];
  $password=$_POST['password'];



  $query= mysqli_query($conn, "SELECT * FROM login_tb WHERE username='$username' AND password='$password'");
  
  
  if(mysqli_num_rows($query)>0)
      {
         
        $row=mysqli_fetch_assoc($query);
        $login_id=$row['login_id'];
        if($row['type']=='admin')
        {
           $_SESSION["user_id"]=$row['login_id'];
        $_SESSION["type"]=$row['type'];
         header("location: dashboard.php");

        }
        if($row['type']=='student')
        {
          $aprove=mysqli_query($conn,"SELECT * FROM student_reg_tb JOIN login_tb ON student_reg_tb.login_id=login_tb.login_id   WHERE student_reg_tb.login_id='$login_id'");
          // $e=mysqli_fetch_assoc($aprove);
          //   $d=$e['status'];
          // var_dump($d);exit();

          $checking_aproval=mysqli_fetch_assoc($aprove);

          
           
          if($checking_aproval['status']==1)
          {
            $_SESSION['user_id']=$checking_aproval['login_id'];
             $_SESSION['username']=$checking_aproval['username'];
             $_SESSION['type']=$checking_aproval['type'];
             
              header("location:../Gp/stud_home.php");
           }
      
          else 
          {
            echo"<script>alert('waiting for aproval')</script>";
          }
        

          }
          if($row['type']=='customer')
         {



        $aprove=mysqli_query($conn,"SELECT * FROM customer_reg_tb WHERE login_id='$login_id'");
          // $e=mysqli_fetch_assoc($aprove);
          //   $d=$e['status'];
          // var_dump($d);exit();

          $checking_aproval=mysqli_fetch_assoc($aprove);

          
           
          if($checking_aproval['status']==1)
          {
            $_SESSION['user_id']=$checking_aproval['login_id'];
             $_SESSION['username']=$checking_aproval['username'];
             $_SESSION['type']=$checking_aproval['type'];
             
              header("location:../Gp/cus_home.php");
           }
      
          else 
          {
            echo"<script>alert('waiting for aproval')</script>";
          }
        

          }
   
}
 else
        {
            echo "<script> alert('incorrect username or password')</script>";
            
        }

  
}








?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Talent Hub</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="user"placeholder="username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button><br>
              <a href="../home.php">Home</a>
          </div>
        </form>
        <form class="forget-form" action="dashboard.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>