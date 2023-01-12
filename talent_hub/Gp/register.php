<?php
include"../docs/connect.php";

if(isset($_POST['sub']))
{
  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $gender=$_POST['gender'];
  $department=$_POST['department'];
  $year=$_POST['year'];
  $service=$_POST['service'];
  $user=$_POST['user'];
  $passw=$_POST['pass'];


  @$check_mobile=mysqli_query($conn,"SELECT * FROM student_reg_tb WHERE mobile='$mobile'");
  @$check_email=mysqli_query($conn,"SELECT * FROM student_reg_tb WHERE email='$email'");
   
if(mysqli_num_rows($check_mobile)>0)
{
  echo"<script>alert('mobile number already exist');</script>";
  echo"<script>window.location.href='register.php';</script>";
}



  
  mysqli_query($conn,"INSERT INTO login_tb (username,password,type) VALUES ('$user','$passw','student')");

  $last_login_id=mysqli_insert_id($conn);

 $select=mysqli_query($conn,"INSERT INTO `student_reg_tb`(`login_id`,`name`,`address`,`email`,`mobile`,`gender`,`department`,`year`,`service`) VALUES('$last_login_id','$name','$address','$email','$mobile','$gender','$department','$year','$service')");

  echo "<script>alert('registration completed')</script>";

  echo"<script>window.location.href='home.php';</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style type="text/css">
    #hero{
          height: 39vh;
    }
  </style>

  <!-- =======================================================
  * Template Name: Gp - v4.0.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="home.php">Gp<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="home.php">Home</a></li>
          
          
          
          <!-- <li><a class="nav-link scrollto " href="product.php">Product</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../docs/login.php" class="get-started-btn scrollto">login</a>

    </div>
  </header>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Student Registration<span></span></h1>
          <h2></h2>
        </div>
      </div>


    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
  






  <section id="reg" class="reg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>talent hub</h2>
          <p>student registration</p>
        </div>

      <!--   <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->

        <div class="row mt-5">

      <!--     <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div> -->

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form name="forms/contact.php" method="post" >
            
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div><br>
                 
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input  type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
             
               <div class="col-md-6  form-group mt-3">
                <textarea class="form-control" name="address" id="address"rows="5" placeholder="Address" required></textarea>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile number" required>
              </div>

    <div class="col-md-6 form-group mt-3 ">      
      <th>Gender</th> 
     
      <input type="radio" name="gender" value="male" onclick="clearerror('sgen')"> male
      <input type="radio" name="gender" value="female" onclick="clearerror('sgen')">female<!-- <span id="sgen" style="color: red"></span> -->
    </div>

    <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="department" id="department" placeholder="department" required>
              </div>


              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="year" id="year" placeholder="year" required>
              </div>

              <div class="col-md-6  form-group mt-3">
                <textarea class="form-control" name="service" id="service"rows="5" placeholder="service details" required></textarea>
              </div>
            <br>
            <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="user" id="user" placeholder="USERNAME" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="pass" id="password" placeholder="PASSWORD" required>
              </div><br>
          </div>

<!-- S
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <!-- <div class="text-center"><button type="submit">Register</button></div> -->

              <div class="tile-footer">
              <button class="btn btn-primary" name="sub" id="sub" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>

              
            </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
   

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>