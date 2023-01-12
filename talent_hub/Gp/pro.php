
<?php 

include"../docs/connect.php";

session_start();
// $id=$_SESSION['ser_id'];

//$S=mysqli_query($conn,"SELECT * FROM order_product_tb");
//$r=mysqli_fetch_assoc($S);

 $query=mysqli_query($conn,"SELECT * FROM product_tb");

// $row=mysqli_fetch_assoc($query);

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

  <!-- End Header -->
<?php
include('hd.php');
?>


<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Products<span></span></h1>
         
        </div>
      </div>

      

    </div>
  </section><!-- End Hero -->


    <!-- ======= Portfolio Section ======= -->
       <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Portfolio</h2> -->
          <p>Check our Products</p>
        </div>

         <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Drawings and paintings</li>
              <li data-filter=".filter-card">Craft works</li> -->
            <!--   <li data-filter=".filter-web">Inovtions</li> -->
             <!--  <li data-filter=".filter-food">Food items</li>
             <li data-filter=".filter-stitch">Stiching and wearings</li>
             
              <li data-filter=".filter-web">Photographs</li> -->
              <!-- <li data-filter=".filter-web">Editing/Animation/Photoshop</li> -->
            <!--   <li data-filter=".filter-web">Shortfilms</li> -->
              <!-- <li data-filter=".filter-web">Writings</li> -->
            <!-- </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


          <?php
          while($data=mysqli_fetch_assoc($query)){
            ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="photos/<?php echo $data['image'];?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $data['name'];?></h4>
                <p>App</p>
                <div class="portfolio-links">
                  <i class="bx bx-plus"><a href="msg.php?pid=<?php echo $data['product_id'];?>" button class="btn btn-primary" id="submit" type="sub" name="sub"><i class="fa fa-fw fa-lg fa-check-circle"></i>Request</button></i></a></i>
                 
                </div>
              </div>
            </div>
          </div>
          
<?php
}
?>


      </div> 
    </section><!-- End Portfolio Section -->
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