<html>
    <head>
        <!-- CSS -->
	<style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	</style>

	<!-- CKEditor -->	
	<script src="ckeditor/ckeditor.js" ></script>
    </head>
    
</html>

<!DOCTYPE html>
<html>
<head>
<title>Studio Dental | Dashboard/title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<!--<div id="content">-->
  <form method="POST" action='submitpost.php' enctype="multipart/form-data">
		
<div>
  	  <input type="file" name="image">
  	</div>
  	<br>
		Short Description: 
		<textarea id='text' name='short_desc' style='border: 1px solid black;'  ></textarea><br>

		Post Description: 
		<textarea id='text' name='long_desc' ></textarea><br>

		<button type="submit" name="upload">POST</button>
	</form>
	
	<!-- Script -->
	<script type="text/javascript">
	
		// Initialize CKEditor
		CKEDITOR.inline( 'short_desc');

		CKEDITOR.replace('long_desc',{

			width: "500px",
        	height: "200px"
   
		}); 
	
    	
	</script>
	
	
  <!--form method="POST" action="blogpost.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="title_text" 
      	placeholder="Enter Post titile"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form-->
<!--</div>-->
</body>
</html>