<?php
  session_start();
  include"../docs/connect.php";
  $var=mysqli_query($conn,"SELECT * FROM cat_tb");
  
  // $data=mysqli_fetch_assoc($var);
  // $dat=$data['name'];
  // var_dump($dat);  exit();






$course1="";
if (isset($_POST['sub']))
{
          $name=$_POST['name'];
          
          $catagory=$_POST['catagory'];
         
          $pic=$_FILES['f1']['name'];

            
             if($pic !="")
                  {
                      $filearray=pathinfo($_FILES['f1']['name']);
                     // var_dump($filearray);exit;
                      $file1=rand();
                      $file_ext=$filearray["extension"];

                          if(check_ext($file_ext))
                              {
                                    $filenew=$file1.".".$file_ext;
                                    move_uploaded_file($_FILES['f1']['tmp_name'],"photos/".$filenew);
                              }
                          else
                              {
                                    echo "<script> alert('please check file extension')</script>";
                              }
        
                   }


$lid=mysqli_insert_id($conn);
$select=mysqli_query($conn,"insert into cat_tb(cat_id,name,catagory,upload) values ('$lid','$name',$catagory','$filenew')");
header("location:view_product.php");

}

function check_ext($f_ext)
      {
        $allowed= array('jpg','png','jpeg');
        if(in_array($f_ext,$allowed))
        {
          return true;
        }
        else
        {
          return false;
        }
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
  </head>




<body>

  <!-- End Header -->





<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2>Add your product<span></span></h2>
         
        </div>
      </div>

      

    </div>
  </section><!-- End Hero -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Add Product</h2>
         <!--  <p>Check our Portfolio</p> -->
        </div><section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <!-- <div class="section-title">
         
          <p>Message</p>
        </div> -->

        <!-- <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->

        <div class="row mt-5">

         <!--  <div class="col-lg-4">
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

          <div >

            <form  method="post" role="form" class="php-email-form">
       
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Product Name" requiredonclick="clearerror('sname')">
                </div>

<div class="col-md-6 form-group">
                
   

      <select id="cat" name="Catagory" class="form-control" onclick="clearerror('scat')"placeholder="select a place">
        
        
              <?php
                while( $data=mysqli_fetch_assoc($var)){
                ?>
               
                <?php echo $data['name'];?>
                 



      </select><span id="sloc" style="color: red"></span>

      
    <br>
<div>

          upload
         
              <input type="file" name="f1">
           
            </div>  
   
             
              <div class="my-3">
          
                <div class="error-message"></div>
                
              </div>
              
              <div ><button  type="submit" name="sub" onclick=" return validate()">Add product</button>

              </div>
            </form>

          </div>

        </div>

      </div>
    </section>
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
  <script>
      
      function validate()
      {
              var uname=document.getElementById("name").value;
              
                   var uloc=document.getElementById("catagory").value;
                    
              if(uname=="")
              {
                document.getElementById("sname").innerHTML=" *name required";
                 return false;
              }
                          
        
          
              }

             
      // if((ugen[0].checked==false)&&(ugen[1].checked==false))
      // {
      //  alert("select a gender");
      //  return false;
      // }

             

              

           
             if(ucat=="")
              {
                document.getElementById("scat").innerHTML="*catagory required";
                return false;
              }


             

        
      }
     


  </script>  
        
<script>
  function clearerror(eee)
  {
    document.getElementById(eee).innerHTML="";

  }
</script>

</body>

</html>