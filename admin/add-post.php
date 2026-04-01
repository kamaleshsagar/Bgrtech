<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
$category=$_POST['summernote'];
$title=$_POST['posttitle'];
$description=$_POST['summernote'];
$description = str_replace("'", "BLOG", $description);
$category = str_replace("'", "BLOG", $category);
$date=$_POST['date'];
$area=$_POST['area'];
$status=1;

$arr = explode(" ",$posttitle);
$url=implode("-",$arr);
// $imgfile="";
$imgfile= basename($_FILES["postimage"]["name"]);
// $target_path = "postimages/";  
// $target_path = $target_path.basename( $_FILES['postimage']['name']);   
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
$imgnewfile="blog-".$imgfile;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);

$status=1;
// $query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,SubCategoryId,PostDetails,PostUrl,Is_Active)values('$posttitle','$catid','$subcatid','$postdetails','$url','$status')");

$query=mysqli_query($con,"insert into tblcontent(CategoryId,Subcategory,SubCatDescription,image,PostingDate,UpdationDate,Is_Active)
values('$title','$area','$description','$imgnewfile',now(),now(),'$status')");
 


if($query)
{
$msg="Post successfully added ";
}
else{
$error="Something went wrong . Please try again.";    
} 

// }
}





?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>BGR Tech | Dashboard</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<!--<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">-->
        <script src="assets/js/modernizr.min.js"></script>
 <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css'>-->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css'>
 
 	<style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	</style>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Upload Blog Content</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog </a>
                                        </li>
                                        <li class="active">
                                            Add Post
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                        		


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





                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
	                                            <div class="form-group">
<label for="exampleInputEmail1">Add Title</label>
<input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
</div>
	                                     
	                                            <div class="form-group">
	                                            
	                                            

 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Feature Image (with size 1024x768, format .jpeg)</b></h4>
<input type="file" class="form-control" name="postimage">
</div>
</div>
	                                            
	                                            <div class="form-group">
	                                                <h4 class="m-b-30 m-t-0 header-title"><b>Post text</b></h4>
	                                                <div class="col-md-10">
	                                                 	<textarea id='summernote' name='summernote' ></textarea><br>
	                                                 	
	                                                </div>
	                                            </div>

        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
	<!--                                        	<script type="text/javascript">-->
	
		
	<!--	CKEDITOR.inline( 'short_desc');-->

	<!--	CKEDITOR.replace('long_desc',{-->

	<!--		width: "500px",-->
 <!--       	height: "200px"-->
   
	<!--	}); -->
	
    	
	<!--</script>-->
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>
          <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>-->
        <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>-->
         <script src='https://code.jquery.com/jquery-3.2.1.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js'></script>
<script  src="./script.js"></script>



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <!--<script src="assets/js/jquery.min.js"></script>-->
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

    </body>
</html>
<?php } ?>