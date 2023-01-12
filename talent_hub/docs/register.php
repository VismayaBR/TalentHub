



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
    <title>Form Samples - Vali Admin</title>
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
    <!-- <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     
      <div class="row">
        <div class="col-md-5">
          <div class="tile">
            <h3 class="tile-title">Care and Service</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" id="name" name="name" type="text" placeholder="Enter name"required="">
                </div>

                

                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" id="email" type="email" name="email" placeholder="Enter email address"required="">
                </div>

                <div class="form-group">
                  <label class="control-label">Mobile no</label>
                  <input class="form-control" id="mobile" type="text" name="mobile" placeholder="enter mobile number"required="required"pattern="[0-9].{9}" >
                </div>

                <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea class="form-control" id="address" rows="4" name="address"placeholder="Enter your address"required=""></textarea>
                </div>




                <!-- <div class="form-group">
                  <label class="control-label" id="gender">Gender</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Male
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Female
                    </label>
                  </div>
                </div> -->
                <!-- <div class="form-group">
                  <label class="control-label">Identity Proof</label>
                  <input class="form-control" type="file">
                </div> -->
                <div class="form-group">
                  <div class="form-check">
                   <!--  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">I accept the terms and conditions
                    </label> -->
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" id="button" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
<script>
 function validate()
      {
              var uname=document.getElementById("name").value;
               var uemail=document.getElementById("email").value;
                var umob=document.getElementById("mob").value;
                 var ugen=document.getElementsByName("gender");
                 
                    var uuser=document.getElementById("user").value;
                     var upass=document.getElementById("password").value;
             
              if(uname=="")
              {
                document.getElementById("name").innerHTML=" *name required";
                 return false;
              }
                          
             
               if(uemail==""||uemail.indexOf("@")==-1||uemail.indexOf(".")==-1)
              {
                document.getElementById("email").innerHTML="*email required";
                return false;
              }
             
          
             if(umob=="")
              {
                document.getElementById("mobile").innerHTML="*number required";
                return false;
              }
              
             if(isNaN(umob))
               {
                    document.getElementById("mobile").innerHTML="*numbers only";
               
                return false;
              }

             if(umob.length<10||umob.length>10)
             {
              document.getElementById("mobile").innerHTML="*enter 10 numbers";
             //alert("enter 10 digit numbers");
              return false;
             }

      // if((ugen[0].checked==false)&&(ugen[1].checked==false))
      // {
      //  alert("select a gender");
      //  return false;
      // }

              flag=0;
              for(i=0;i<ugen.length;i++)
               {
                if (ugen[i].checked==true)
                {
                  flag=1;
                  break;
                }
               }
                if (flag==0)
                {
             
                document.getElementById("gender").innerHTML="*select a gender";
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
</html>
