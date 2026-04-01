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
// $category=$_POST['category'];
// $title=$_POST['title'];
$description=$_POST['editor'];
// $date=$_POST['date'];
// $area=$_POST['area'];
$status=1;

$imgfile=$_FILES["postimage"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
// if(!in_array($extension,$allowed_extensions))
// {
// echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// }
// else
// {
//rename the image file
$imgnewfile=$area.$imgfile;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"updates/".$imgnewfile);

// }

// INSERT INTO `tblsubcategory`(`CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')

    $query=mysqli_query($con,"insert into tbl_new_updates(CategoryId, Subcategory, SubCatDescription, PostingDate, UpdationDate, post_image, Is_Active) values('','','$description', now(), now(),'$imgnewfile', '$status')");

 

// $query=mysqli_query($con,"insert into tbl_oil_gas_products(CategoryId, Subcategory, SubCatDescription, PostingDate, UpdationDate, Is_Active) values('$title','$area','$description', now(), now(), '$status')");

if($query)
{
$msg="Category created ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>BGR Tech | Dashboard</title>

        <!-- App css -->
        <link href="assets/css/editorstyle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        
		<!--<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">-->
        <!--<script src="assets/js/modernizr.min.js"></script>-->
        
               <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
 <!--<script src="assets/js/editorscript.js"></script>-->
 
          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js'></script>
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>

 
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css'>

 <style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	.ck-file-dialog-button{
	    display:none;
	}
	.ck .ck-button .ck-off .ck-dropdown__button{
	    display:none;
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
                                    <h4 class="page-title">Upload Services</h4>
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

 <!--<a href="manage-oil-gas-products.php" style="float:right;margin:25px;" <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">-->
 <!--                                                   Manage Products-->
 <!--                                               </button></a>-->
                        <div class="row">
                            <div class="col-sm-12">
                               
                                
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Title </b></h4>
                                    <hr />
                        		


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
	                                            
	 <!--                                           <div class="form-group">-->
	 <!--                                               <label class="col-md-2 control-label">Court of practice</label>-->
	 <!--                                               <div class="col-md-10">-->
	 <!--                                                   <select id="practice" name="practice" class="form-control" required>-->
  <!--  <option value=" Supreme Court"> Supreme Court</option>-->
  <!--  <option value=" High Court"> High Court</option>-->
  <!--</select>-->
	 <!--                                               </div>-->
	 <!--                                           </div>-->
	 <!--                                           <div class="form-group">-->
	 <!--                                               <label class="col-md-2 control-label">Locations</label>-->
	 <!--                                               <div class="col-md-10">-->
	 <!--                                                   <select id="location" name="location" class="form-control" required>-->

  <!--  <option value="Delhi">Delhi</option>-->
  <!--  <option value="Mumbai">Mumbai</option>-->
  <!--  <option value="Hyderabad">Hyderabad</option>-->
  <!--  <option value="Amaravati ">Amaravati</option>-->
  <!--</select>-->
	 <!--                                               </div>-->
	 <!--                                           </div>-->
	                                     
	                                           
	                                            
	     <!--                                       <div class="form-group">-->
	     <!--                                           <label class="col-md-2 control-label">Date</label>-->
	     <!--                                           <div class="col-md-10">-->
	                                                 <!--<input type="text" class="form-control" value="" name="date" placeholder="dd/mm/yyy" required>-->
	     <!--                                             <div class="input-group date" id="datePicker">-->
      <!--  <input type="text" class="form-control" id="date" name="date" placeholder="Article Date" required="">-->
      <!--  <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>-->
      <!--</div>-->
	     <!--                                           </div>-->
	     <!--                                       </div>-->
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Details</label>
	                                                <div class="col-md-10">
	                                                 <!--<input type="text" class="form-control" value="" name="description" required>-->
	                                                 <!--<textarea class="form-control" rows="5" name="description" id="description" required></textarea>-->
	                                                 <textarea name="editor" id="editor">
    </textarea>
	                                                 <!--<textarea name="content" id="editor">Body</textarea>-->
<br>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Image</label>
	                                                <div class="col-md-10">
	                                                 <h4 class="m-b-30 m-t-0 header-title"><b>Image (format .jpeg /.jpg)</b></h4>
<input type="file" class="form-control" id="postimage" name="postimage"  required>
	                                                 <!--<textarea name="content" id="editor">Body</textarea>-->
<br>
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
<!--          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>-->
        <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>-->
<script>
    var today = new Date();
// var minDate = today.setDate(today.getDate());

$('#datePicker').datetimepicker({
  useCurrent: false,
  format: "MM/DD/YYYY",
//   minDate: minDate
});

var firstOpen = true;
var time;

$('#timePicker').datetimepicker({
  useCurrent: false,
  format: "hh:mm A"
}).on('dp.show', function() {
  if(firstOpen) {
    time = moment().startOf('day');
    firstOpen = false;
  } else {
    time = "01:00 PM"
  }
  
  $(this).data('DateTimePicker').date(time);
});
</script>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        
        <!--<script src="assets/js/jquery.min.js"></script>-->
        <!--<script src="assets/js/bootstrap.min.js"></script>-->
        
        
        <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>-->
        
        <!--<script src="assets/js/detect.js"></script>-->-->--->
        <script src="assets/js/fastclick.js"></script>
        
        <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
        <!--<script src="assets/js/jquery.blockUI.js"></script>-->
        <!--<script src="assets/js/waves.js"></script>-->-->-->
        <!--<script src="assets/js/jquery.slimscroll.js"></script>-->-->
        <!--<script src="assets/js/jquery.scrollTo.min.js"></script>-->-->-->
        <!--<script src="../plugins/switchery/switchery.min.js"></script>-->

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>