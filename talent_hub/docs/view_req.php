
<?php
  session_start();
  include"connect.php";
  $var=mysqli_query($conn,"SELECT req_id,service,name,service_request_tb.status FROM service_request_tb JOIN request_service_tb ON  service_request_tb.ser_id=request_service_tb .ser_id JOIN customer_reg_tb ON  service_request_tb.reg_id=customer_reg_tb.reg_id");
  
  // $data=mysqli_fetch_assoc($var);
  // $dat=$data['name'];
  // var_dump($dat);  exit();
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
    <title>Basic Tables - Vali Admin</title>
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
    include'header.php';
    ?>
  
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    

    <?php
    include'sidebar.php';
    ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>talent hub</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!-- <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li> -->
        </ul>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title">services</h3>
            <table class="table">
              <thead>
                <tr>
                  
                  
                   <th>service</th>
                   <th>customer name</th>
<th>action</th>
                  
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
               <td>
                    <?php
                    $sts=$data['status'];
                    if($data['status']==0)

                    {
                      ?>

                      <a href="../Gp/aprove.php?edit_id=<?php echo $data['req_id'];?>">aprove</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="../Gp/disprove.php?edit_id=<?php echo $data['req_id'];?>">disaprove</a>
                      <?php
                    } 
                    else{
                      ?>
                    
                   
                    
                      <a href="">aproved</a>
                       
                       <?php
                    }
                   
                    ?>
                    
                 

                  <!-- sss -->
                  <!-- <td>Mark</td>
                  <td>Otto</td>
                  <th>calicut</th>
                  <td><a href="">waiting for aproval</a></td> -->
                  
                </tr>
                <?php
              }
                ?>
               
    
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
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