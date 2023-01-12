
<?php 

include"../docs/connect.php";

session_start();
if(!isset($_SESSION['user_id']))
{
  header("location:../docs/login.php");
}

?>

<?php

 
  $var=mysqli_query($conn,"SELECT service,name,service_request_tb.status FROM service_request_tb JOIN request_service_tb ON  service_request_tb.ser_id=request_service_tb .ser_id JOIN customer_reg_tb ON  service_request_tb.reg_id=customer_reg_tb.reg_id");
  
  // $data=mysqli_fetch_assoc($var);
  // $dat=$data['name'];
  // var_dump($dat);  exit();
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
          height: 50vh;
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

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="stud_home.php">Home</a></li>
          
          
          
          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="add_products.php">Add Product</a></li>
              <li><a href="view_product.php">View Product</a></li>
              </ul>
              </li>


              
              <li class="nav-item">
                  
                      <?php
                      include'../docs/connect.php';
                      
                      $id =$_SESSION["user_id"];
                   $t_query=mysqli_query($conn,"SELECT * FROM student_reg_tb WHERE login_id='$id'");
                   $row=mysqli_fetch_assoc($t_query);
                   $reg_id=$row['reg_id'];
                   
                      $query_message=mysqli_query($conn,"SELECT * FROM order_product_tb join product_tb on order_product_tb.product_id=product_tb.product_id WHERE product_tb.reg_id='$reg_id' AND status=0");
                      $count=mysqli_num_rows($query_message);
                      ?>
                      <a class="nav-link" href="msg_seen.php?reg=<?php echo $reg_id?>">
                        <?php
                        if($count>0)
                        {
                      ?>

                    <span class="badge" style="background-color: red"><?php echo $count;?></span>Message

                    <?php } else{ ?>Message <?php } ?></a>
                </li>
                  
                </li>
             
                 <li><a class="req.php" href="">Request</a></li>


                
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1 style="font-family: Cursive">welcome to talent hub<span></span></h1>
         <!--  <h2>We are team of talented digital marketers</h2> -->
        </div>
      </div>

     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      
      <table class="table">
              <thead>
                <tr>
                  
                  
                   <th>service</th>
                   <th>customer name</th>

                  
                <!--   <th>action</th> -->
                  
                </tr>

              </thead>
              <tbody>
                <?php
                while( $data=mysqli_fetch_assoc($var)){
                ?>
                <tr>
                 <td><?php echo $data['service'];?></td>
                 <td><?php echo $data['name'];?></td>
               
                <?php
              }
                ?>



      </table>





    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/a.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/q.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/b.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/d.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/p.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/n.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/x.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/e.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    


             
    </section>

    <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>____contact us____</h3>
          <p>0080-1234-567</p>
          
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->

    </section> --><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


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