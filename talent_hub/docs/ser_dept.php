<?php
  session_start();
  include"connect.php";
  $var=mysqli_query($conn,"SELECT * FROM ser_tb");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Bootstrap Elements - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    
<?php
include('header.php');
?>


    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   

<?php
include('sidebar.php');
?>


    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Service Department</h1>
         <!--  <p>Services</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"></a></li>
        </ul>
      </div>
      <!-- Buttons-->

        <div class="row">
          <div class="col-lg-12">
            <h3>Services</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
<?php

 while( $data=mysqli_fetch_assoc($var)){
  ?>

              <div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">

                    <h3><td><?php echo $data['name'];?></td></h3>
                    
                  </blockquote>
                </div>
              </div>

<?php
}
?>
              <!-- <div class="card mb-3 text-white bg-success">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>NSS</h3> -->
                   <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
                 <!--  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-info">
                <div class="card-body">
                  <blockquote class="card-blockquote">

                    <h3>Blood Bank</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
                 <!--  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-warning">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>student council</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in  -->
                      <!-- <cite title="Source Title">Source Title</cite>
                    </footer> -->
               <!--    </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-danger">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>IT expert</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
                 <!--  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-black bg-light">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>tution</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
       <!--            </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-dark">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>canteen</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
                  <!-- </blockquote>
                </div>
              </div>
            </div>
            <div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>event management</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
                 <!--  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-success">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <h3>hosting</h3> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in 
                      <cite title="Source Title">Source Title</cite>
                    </footer> -->
             <!--      </blockquote>
                </div> -->
              </div> 
          </div>

      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script>
      $('.bs-component [data-toggle="popover"]').popover();
      $('.bs-component [data-toggle="tooltip"]').tooltip();
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
  </body>
</html>