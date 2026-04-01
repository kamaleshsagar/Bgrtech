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
$title=$_POST['title'];
$description=$_POST['editor'];
// $date=$_POST['date'];
$area=$_POST['area'];
// $practice=$_POST['practice'];
// $location=$_POST['location'];
$status=1;
// INSERT INTO `tblsubcategory`(`CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
$query=mysqli_query($con,"insert into tbl_heat_exchanger_products(CategoryId, Subcategory, SubCatDescription, PostingDate, UpdationDate, Is_Active) values('$title','$area','$description', now(), now(), '$status')");
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
                                    <h4 class="page-title">Add Oil & Gas Product</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Category </a>
                                        </li>
                                        <li class="active">
                                            Add Title
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

 <a href="manage-oil-gas-products.php" style="float:right;margin:25px;" <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Manage Products
                                                </button></a>
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
                        					<form class="form-horizontal" name="category" method="post">
	 <!--                                           <div class="form-group">-->
	 <!--                                               <label class="col-md-2 control-label">Category</label>-->
	 <!--                                               <div class="col-md-10">-->
	 <!--                                                   <select id="area" name="area" class="form-control" required>-->

  <!--  <option value="Production & Test Manifold Skids">Production & Test Manifold Skids</option>-->
  <!--  <option value="Indirect Water Bath Heater (IDBH)">Indirect Water Bath Heater (IDBH)</option>-->
  <!--  <option value="Heater Treaters">Heater Treaters</option>-->
  <!--  <option value="Test / Production / Group Separators (Mobile / Skid Mounted)">Test / Production / Group Separators (Mobile / Skid Mounted)</option>-->
  <!--  <option value="Desanders / Cyclone Separators">Desanders / Cyclone Separators</option>-->
  <!--  <option value="Fuel Gas Conditioning Skids (Primary / Secondary)">Fuel Gas Conditioning Skids (Primary / Secondary)</option>-->
  <!--  <option value="Instrument Utility Gas (IUG) Conditioning Skids">Instrument Utility Gas (IUG) Conditioning Skids</option>-->
  <!--  <option value="Metering Skids (Gas / Liquid)">Metering Skids (Gas / Liquid)</option>-->
  <!--  <option value="Knock Out Drums">Knock Out Drums</option>-->
  <!--  <option value="Filters">Filters</option>-->
  <!--  <option value="Electric Heaters">Electric Heaters</option>-->
  <!--  <option value="Low Temperature Separators">Low Temperature Separators</option>-->
  <!--  <option value="Surge Vessel / Accumulator">Surge Vessel / Accumulator</option>-->
  <!--  <option value="Flare Knockout Drum">Flare Knockout Drum</option>-->
  <!--  <option value="Flare Seal Drum / Flare Stack">Flare Seal Drum / Flare Stack</option>-->
  <!--  <option value="Gas Dehydration Unit">Gas Dehydration Unit</option>-->
  <!--  <option value="Gas Sweetening Unit">Gas Sweetening Unit</option>-->
  <!--</select>-->
	 <!--                                               </div>-->
	 <!--                                           </div>-->
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
	                                     
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Title</label>
	                                                <div class="col-md-10">
	                                                 <input type="text" class="form-control" value="" id="title" name="title" required>
	                                                </div>
	                                            </div>
	                                            
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