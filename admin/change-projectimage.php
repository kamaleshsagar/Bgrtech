<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['update']))
{

$imgfile= basename($_FILES["postimage"]["name"]);
// $imgfile1= basename($_FILES["postimage1"]["name"]);
// $imgfile2= basename($_FILES["postimage2"]["name"]);
// $imgfile3= basename($_FILES["postimage3"]["name"]);
// $imgfile4= basename($_FILES["postimage4"]["name"]);
// $imgfile5= basename($_FILES["layoutimage"]["name"]);
// $imgfile6= basename($_FILES["locationimage"]["name"]);
// $imgfile7= basename($_FILES["highlightimage"]["name"]);
// $imgfile8= basename($_FILES["featureimage"]["name"]);
// $imgfile9= basename($_FILES["mainimage"]["name"]);

// $extension1 = substr($imgfile1,strlen($imgfile1)-4,strlen($imgfile1));
// $imgnewfile1=md5($imgfile1).$extension1;

// $extension2 = substr($imgfile2,strlen($imgfile2)-4,strlen($imgfile2));
// $imgnewfile2=md5($imgfile2).$extension2;

// $extension3 = substr($imgfile3,strlen($imgfile3)-4,strlen($imgfile3));
// $imgnewfile3=md5($imgfile3).$extension3;

// $extension4 = substr($imgfile4,strlen($imgfile4)-4,strlen($imgfile4));
// $imgnewfile4=md5($imgfile4).$extension4;

// $extension5 = substr($imgfile5,strlen($imgfile5)-4,strlen($imgfile5));
// $layoutimage=md5($imgfile5).$extension5;

// $extension6 = substr($imgfile6,strlen($imgfile6)-4,strlen($imgfile6));
// $locationimage=md5($imgfile6).$extension6;

// $extension7 = substr($imgfile7,strlen($imgfile7)-4,strlen($imgfile7));
// $highlightimage=md5($imgfile7).$extension7;

// $extension8 = substr($imgfile8,strlen($imgfile8)-4,strlen($imgfile8));
// $featureimage=md5($imgfile8).$extension8;

// $extension9 = substr($imgfile9,strlen($imgfile9)-4,strlen($imgfile9));
// $mainimage=md5($imgfile9).$extension9;


// move_uploaded_file($_FILES["postimage1"]["tmp_name"],"postimages/".$imgnewfile1);
// move_uploaded_file($_FILES["postimage2"]["tmp_name"],"postimages/".$imgnewfile2);
// move_uploaded_file($_FILES["postimage3"]["tmp_name"],"postimages/".$imgnewfile3);
// move_uploaded_file($_FILES["postimage4"]["tmp_name"],"postimages/".$imgnewfile4);
// move_uploaded_file($_FILES["layoutimage"]["tmp_name"],"postimages/".$layoutimage);
// move_uploaded_file($_FILES["locationimage"]["tmp_name"],"postimages/".$locationimage);
// move_uploaded_file($_FILES["highlightimage"]["tmp_name"],"postimages/".$highlightimage);
// move_uploaded_file($_FILES["featureimage"]["tmp_name"],"postimages/".$featureimage);
// move_uploaded_file($_FILES["mainimage"]["tmp_name"],"postimages/".$mainimage);
//rename the image file
 $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);



$postid=intval($_GET['pid']);
$type=$_GET['type'];
if($type=="image1"){
  $query=mysqli_query($con,"update tblprojects set image1='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="image2"){
  $query=mysqli_query($con,"update tblprojects set image2='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="image3"){
  $query=mysqli_query($con,"update tblprojects set image3='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="image4"){
  $query=mysqli_query($con,"update tblprojects set image1='$imgnewfile' where SubCategoryId='$postid'");  
}

if($type=="layout"){
  $query=mysqli_query($con,"update tblprojects set layout_image='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="location"){
  $query=mysqli_query($con,"update tblprojects set location_image='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="highlight"){
  $query=mysqli_query($con,"update tblprojects set highlight_image='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="feature"){
  $query=mysqli_query($con,"update tblprojects set feature_image='$imgnewfile' where SubCategoryId='$postid'");  
}
if($type=="main"){
  $query=mysqli_query($con,"update tblprojects set mainimage='$imgnewfile' where SubCategoryId='$postid'");  
}

if($query)
{
$msg="Post Feature Image updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Studio Dental | Add Post</title>

        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
 <script>
function getSubCat(val) {
  $.ajax({
  type: "POST",
  url: "get_subcategory.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
  }
  });
  }
  </script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Update Image </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                       
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>
<form name="addpost" method="post" enctype="multipart/form-data">
<?php
$postid=intval($_GET['pid']);
$type=$_GET['type'];
//  $query=mysqli_query($con,"select image1 from tblprojects where SubCategoryId='$postid'");  
if($type=="image1"){
  $query=mysqli_query($con,"select image1 from tblprojects where SubCategoryId='$postid'");  
}
if($type=="image2"){
  $query=mysqli_query($con,"select image2 from tblprojects where SubCategoryId='$postid'");  
}
if($type=="image3"){
  $query=mysqli_query($con,"select image3 from tblprojects where SubCategoryId='$postid'");  
}
if($type=="image4"){
  $query=mysqli_query($con,"select image4 from tblprojects where SubCategoryId='$postid'");  
}

if($type=="layout"){
  $query=mysqli_query($con,"select layout_image from tblprojects where SubCategoryId='$postid'");  
}
if($type=="location"){
  $query=mysqli_query($con,"select location_image from tblprojects where SubCategoryId='$postid'");  
}
if($type=="highlight"){
  $query=mysqli_query($con,"select highlight_image from tblprojects where SubCategoryId='$postid'");  
}
if($type=="feature"){
  $query=mysqli_query($con,"select feature_image from tblprojects where SubCategoryId='$postid'");  
}
if($type=="main"){
  $query=mysqli_query($con,"select mainimage from tblprojects where SubCategoryId='$postid'");  
}
// $query=mysqli_query($con,"select image from tblprojects where SubCategoryId='$postid' and Is_Active=1 ");
while($row=mysqli_fetch_array($query))
{
?>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="addpost" method="post">




 <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Current Post Image</b></h4>
<img src="postimages/<?php 
if($type=="image1"){
echo htmlentities($row['image1']);
}
if($type=="image2"){
echo htmlentities($row['image2']);
}
if($type=="image3"){
echo htmlentities($row['image3']);
}
if($type=="image4"){
echo htmlentities($row['image4']);
}
if($type=="image5"){
echo htmlentities($row['image5']);
}
if($type=="feature"){
echo htmlentities($row['feature_image']);
}
if($type=="layout"){
echo htmlentities($row['layout_image']);
}
if($type=="location"){
echo htmlentities($row['location_image']);
}
if($type=="highlight"){
echo htmlentities($row['highlight_image']);
}
if($type=="main"){
echo htmlentities($row['mainimage']);
}
?>" width="140"/>
<br />

</div>
</div>
</div>

<?php } ?>
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>New Feature Image</b></h4>
<input type="file" class="form-control" id="postimage" name="postimage"  required>
</div>
</div>
</div>

<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>
</form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



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
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


  <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>



    </body>
</html>
<?php } ?>