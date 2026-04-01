<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['username'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
    $sql2 =mysqli_query($con,"SELECT * FROM tbladmin WHERE AdminUserName='$uname' AND AdminPassword ='$password'");
 $num2=mysqli_fetch_array($sql2);
 
//$hashpassword=$num['AdminPassword']; // Hashed password fething from database
//verifying Password
if ($num2>0) {
$_SESSION['login']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>

<html>
    <head>
        <meta name="description" content="Studio Dental Admin">


        <!-- App title -->
        <title>BGR Tech | Admin Panel</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <style>
            .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
  margin-right: 10px;
}
        </style>

    </head>

<style>
.widescreen{background: url(assets/images/bgr-bg.jpg) top center no-repeat;
    background-size: cover;}
    .main{
    /*        background: url(assets/images/footer-bg.jpg) top center no-repeat;*/
    /*background-size: cover;*/
    font-size: 14px;
    /*padding: 190px 0 60px 0;*/
    position: relative;
    }
    .widescreen:before {
    content: "";
    background: rgba(0, 0, 0, 0.2);
    position: absolute;
    inset: 0;
}
.account-content{background: #fff;}
</style>

    <body>

        <!-- HOME -->
        <section class="main">
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="account-logo-box" style="display:flex;align-items:center;gap:20px;background:#fff;">
                                    <img src="assets/images/logo.png" style="width: 25%;">
                                    <h2 style="color:#42bb51 ;">Admin Dashboard</h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <hr style="border-top: 1px solid #000;margin:0px;">
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input id="password-field" type="password" class="form-control" name="password" value="">
                                                <!--<input class="form-control" type="password" name="password" id="password" required="" placeholder="Password" autocomplete="off">-->
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                <!--<input type="checkbox" onclick="myFunction()" style="margin-top: 20px;">    Show Password -->
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>
                                        <br>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                    

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->
    <!--      <footer class="footer text-right" style="left: 0px;-->
    <!--text-align-last: center;">-->
    <!--               2022 © Powered by Motion Pixel Tech Pvt Ltd.-->
    <!--            </footer>-->
    

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

// function myFunction() {
//   var x = document.getElementById("password");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }
</script>
    </body>
</html>