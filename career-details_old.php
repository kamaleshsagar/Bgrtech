<?php 
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Page Title -->
	<title>BGR Tech</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Lexend:wght@100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
		rel="stylesheet">

	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome icon css-->
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated css -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Magnific css -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<style>
		.page-header {
			background-image: url(images/header-banner.jpeg);
			position: relative;
			background-size: contain;
			padding: 260px 0 100px;
			margin-top: -162px;
			overflow: hidden;
		}

		.team-single-header p {
			line-height: 1.5em;
		}

		.roles {
			background: #2021220a;
			padding: 20px 20px;
			border-radius: 20px;
			margin-bottom: 20px;
		}

		p {
			padding: 0px !important;
			margin-bottom: 8px !important;
		}

		.requirements {
			margin-bottom: 20px !important;
		}

		.team-single-information- {
			padding: 20px;
		}
		
		.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  /*z-index: 1; */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.form-control{
    color:#000;
}
@media (max-width: 768px) {
    .modal-content {
        height:auto !important;
        width: 100% !important;
    }
}

/* Modal Content */
.modal-content {
  background-color: #fff;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 45%;
  height: 200px;
  color: #343434;
}

/* The Close Button */
.closepopup {
  color: #000;
  float: right;
  font-size: 28px;
  font-weight: bold;
  opacity: .5;
      text-align: right;
}

.closepopup:hover,
.closepopup:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.alert-success{
    background-image: -webkit-linear-gradient(top,#dff0d800 0,#c8e5bc00);
}
.contacttext p{
      font-size:15px;
      color: #343434;
  }
   .help{
	    color: red;
	}
		/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
	</style>
</head>

<body class="tt-magic-cursor">

	<!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/logo.png" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

	<!-- Magic Cursor Start -->
	<div id="magic-cursor">
		<div id="ball"></div>
	</div>
	<!-- Magic Cursor End -->

	<!-- Topbar Section Start -->
	<!--<div class="topbar wow fadeInUp">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-8">-->
	<!-- Topbar Contact Information Start -->
	<!--				<div class="topbar-contact-info">-->
	<!--					<ul>-->
	<!--						<li><a href="#"><i class="fa-solid fa-envelope"></i> info@domain.com</a></li>-->
	<!--						<li><a href="#"><i class="fa-solid fa-phone"></i> +01 248 248 2481</a></li>-->
	<!--					</ul>-->
	<!--				</div>-->
	<!-- Topbar Contact Information End -->
	<!--			</div>-->

	<!--			<div class="col-md-4">-->
	<!-- Topbar Social Links Start -->
	<!--				<div class="header-social-links">-->
	<!--					<ul>-->
	<!--						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>-->
	<!--						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>-->
	<!--						<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>-->
	<!--						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>-->
	<!--					</ul>-->
	<!--				</div>-->
	<!-- Topbar Social Links End -->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- Topbar Section End -->

	<!-- Header Start -->
	<header class="main-header new-header">
		<div class="header-sticky-">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="Logo" class="img-main">
					</a>
					<!-- Logo End -->

					<!-- Main Menu start -->
					<div class="collapse navbar-collapse main-menu">
						<ul class="navbar-nav" id="menu">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu"><a class="nav-link" href="#">About Us</a>
								<ul style="border-bottom-right-radius: 0px;">
									<li class="nav-item"><a class="nav-link" href="who-we-are.php">Who We Are</a></li>
									<li class="nav-item"><a class="nav-link" href="md-desk.php">MDs Desk</a></li>
									<li class="nav-item"><a class="nav-link" href="team.php">Executive Team</a></li>
									<!-- <li class="nav-item"><a class="nav-link" href="#">Vision Mission</a></li> -->
									<li class="nav-item"><a class="nav-link" href="quality-policy.php">Quality
											Policy</a></li>
									<li class="nav-item"><a class="nav-link"
											href="capability-credentials.php">Certifications & Credentials</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Our Affiliate</a>
										<ul style="border-top-left-radius: 0px;">
											<li class="nav-item"><a class="nav-link"
													href="./BGRTECH-Collabrah_Brochure.pdf" target="_blank">BGRTECH
													Collabrah </a></li>
											<li class="nav-item"><a class="nav-link" href="https://www.geabgr.com"
													target="_blank">GEABGR Energy System </a></li>
										</ul>

									</li>
								</ul>
							</li>



							<li class="nav-item"><a class="nav-link" href="industries.php">Industries</a></li>
							<li class="nav-item submenu"><a class="nav-link" href="#">Our Products</a>
								<ul>
									<li class="nav-item"><a class="nav-link" href="oil-and-gas-products.php">Oil and
											Gas Processing</a></li>
									<li class="nav-item"><a class="nav-link" href="heat-exchangers.php">Heat
											Exchangers</a></li>
									<li class="nav-item"><a class="nav-link"
											href="green-hydrogen-products.php">Hydrogen</a></li>
									<li class="nav-item"><a class="nav-link" href="others.php">Others</a></li>
								</ul>
							</li>
							<li class="nav-item submenu"><a class="nav-link" href="#">Our Projects</a>
								<ul>
									<li class="nav-item"><a class="nav-link"
											href="integrated-surface-facilities.php">Integrated Surface
											Facilities/Early Production Facilities</a></li>
									<li class="nav-item"><a class="nav-link" href="gas-processing-plant.php">Gas
											Gathering/Processing
											Station</a></li>
									<li class="nav-item"><a class="nav-link"
											href="hydrogen-generation-purification-storage.php">Hydrogen Generation,
											Purification
											& Storage</a></li>
									<li class="nav-item"><a class="nav-link" href="api650-storage-tanks.php">API 650
											Storage Tanks</a></li>
								</ul>
							</li>
							<li class="nav-item submenu"><a class="nav-link" href="#">Our Services</a>
								<ul>
									<li class="nav-item"><a class="nav-link"
											href="technical-engineering-services.php">Technical Engineering
											Services</a>
									</li>
									<li class="nav-item"><a class="nav-link" href="feasibility-study.php">Feasibility
											Study</a></li>
									<li class="nav-item"><a class="nav-link" href="feed-engineering.php">FEED
											Engineering</a></li>
									<!-- <li class="nav-item"><a class="nav-link" href="#">Spares Supply</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Commissioning</a></li> -->
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="partners.php">Our Partners</a></li>
						<li class="nav-item "><a class="nav-link" href="#"><img class="dots-icon" src="images/icons/dots.png" style="width: 25px;"></a>
								<ul style="width:120px;">
									<li class="nav-item"><a class="nav-link" href="careers.php">Careers</a></li>
</ul>
						    </li>
						</ul>
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>

			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime">Career Details</h1>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
	
	<?php 
		$postid=intval($_GET['cid']);
		$ret1=mysqli_query($con,"SELECT * FROM `tbl_careers_list` WHERE SubCategoryId='$postid'");
							  $cnt=1;
							  $row=mysqli_fetch_array($ret1);
							  if($row){
							  ?>

	<div class="our-team">
		<div class="container">

			<!--<div class="page-team-single" style="padding-top: 20px;">
				<div class="container">
					<div class="row">
					<!--<div class="col-lg-4">
							<!-- Team Single Image Start -->
			<!--	<div class="team-single-image wow fadeInUp mb-20">
								<figure class="image-anime">
									<img src="images/team-single.jpg" alt="">
								</figure>
							</div>
						</div>-->

			<div class="col-lg-12">
				<!-- Team Member Information Start -->
				<div class="team-single-information-">
					<div class="team-single-header wow fadeInUp pb-50" data-wow-delay="0.25s">

					<h3> <?php echo $row['CategoryId']?></h3>
						<br>
						<p><?php echo $row['Subcategory']?></p>
						
						<div class="roles">
							<p><?php echo $row['SubCatDescription']?></p>
						</div>





					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}else{
?>

	<div class="our-team">
		<div class="container">


			<div class="col-lg-12">
				<!-- Team Member Information Start -->
				<div class="team-single-information-">
					<div class="team-single-header wow fadeInUp pb-50" data-wow-delay="0.25s">

						<br>
						<h3><?php echo "No details found." ?></h3>
						





					</div>
				</div>
			</div>
		</div>
	</div>

<?php }?>


	<!-- About Section Start -->
	<!--<div class="about-us" style="padding-bottom:0px;">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-md-12">
					<!-- Section Title Start -->
	<!--				<div class="section-title">
						<h2 class="text-anime">Job Title: Senior Engineer / Engineer - Production</h2>
					</div>
					<!-- Section Title End -->

	<!-- About us Content Start -->
	<!--				<div class="about-content wow fadeInUp" data-wow-delay="0.25s">
						<!--<p><b>Candidates Must have 1-2 years Exp in any Solar Project</b></p>-->

	<!--					<ul>
							<li><b>Educational Qualification:</b> Diploma / BE / B.Tech - Mechanical</li>
							<li><b>Function/Department:</b> Production</li>
							<li><b>"Location (Factory/Site/Head Office)":</b> Factory</li>
							<li><b>Experience in Years:</b> 3 to 9 Years</li>
							<li><b>No. of Requirements:</b>  1	</li>
							<li><b>Roles</b>
							   <ol>
							   <li>Supervise the fabrication of products as per the standards and specifications of the customer.				
</li>
							   <li>Deliver the products on time with agreed quality specifications.</li>
							   </ol></li>
							<li><b>Responsilities</b>
							<ol>
							<li>Studied Different Fabrication Methods: Material Identification and Stamping, Welding, Drawing Analysis, Material Planning, Qc Checking, and QAP Following.				
</li>
							<li> Support Shop Floor Technical Issues on Welding, Machining, and Metal Finishing Operations Throughout all the Projects on the Shop Floor.				
</li>
							<li>Ability to apply geometric Dimensions and tolerance and Study ASME language on blueprints.				
</li>
							<li>Expertise in managing documentation/record/paperwork to ensure its accuracy.				
</li>
							<li>Writing & reviewing the detailed document and explaining the work & its results, in terms of product purity and activity.				
</li>
							<li> Preparation of a detailed Manufacturing plan & Project Schedule in Excel.				
</li>
							<li>Responsible for ACHE Header Box Fabrication, Tube Bundle Assemble, structural Fabrication and Assemble.				
</li>
							<li>Proper Prepare the Daily Plan and Monthly Plan, Project Plan vs Actual.				
</li>
							<li>Follow the Project QAP and Coordinating the Third-Party Checking.				
</li>
							<li>Preparation for ISO, ASME "U"&"R" Stamp documents.				
</li>
							<li>11.To suggest Design change advice / Approval to Eng-Dept				
</li>
							</ol></li>
							<li><b>Overseeing the marketing campaign in the area</b></li>
						</ul>

						<p><b>Number of jobs: 10</b></p>
					</div>
					<!-- About us Content End -->
	<!--	</div>
			</div>
		</div>
	</div>-->


	<div class="our-projects" style="padding-top:0px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-form-box">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">Apply Now</h3>
						</div>
						<!-- Section Title End -->

						<!-- Contact Form start -->
						<div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
							<form id="contactForm" method="post" enctype="multipart/form-data" data-toggle="validator">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="name" class="form-control" id="name" placeholder="Name"
											required>
										<div class="help with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="email" name="email" class="form-control" id="email"
											placeholder="Email" required>
										<div class="help with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="number" name="phone" class="form-control" id="phone" onkeypress="validate(event)" oninput="validateNumber(event)"
											placeholder="Phone" required>
										<div class="help with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="qualification" class="form-control" id="qualification"
											placeholder="Qualification" required>
										<div class="help with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<textarea name="skills" class="form-control" id="skills" rows="4" placeholder="Skills"
											required></textarea>
										<div class="help with-errors"></div>
									</div>
									<div class="form-group col-md-6 mb-4">
										<label for="file">Upload Resume:</label>
										<input type="file" id="attachment" name="attachment" accept=".doc, .docx, .pdf" required>
										<div class="help with-errors"></div>
									</div>

									<div class="col-md-12 text-center">
										<button type="submit" class="btn-default" id="formSubmitnow">Apply Now</button>
									</div>
								</div>
							</form>
						</div>
						<!-- Contact Form end -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Projects Page Start -->

	<!-- Our Projects Page End -->



	<!-- Footer Start -->
	<footer class="main-footer">
		<!-- Footer Contact Start -->
		<div class="footer-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<!-- Footer Contact Box Start -->
						<div class="footer-contact-box wow fadeInUp" data-wow-delay="0.25s">
							<div class="contact-icon-box">
								<img src="images/icon-email.svg" alt="">
							</div>

							<div class="footer-contact-info">
								<h3>Support & Email</h3>
								<p>info@bgrtech.in</p>
							</div>
						</div>
						<!-- Footer Contact Box End -->
					</div>

					<div class="col-lg-4">
						<!-- Footer Contact Box Start -->
						<div class="footer-contact-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="contact-icon-box">
								<img src="images/whatsapp.png" alt="" style="width:50%;">
							</div>

							<div class="footer-contact-info">
								<h3>Customer Support</h3>
								<p>+91 7397698191</p>
							</div>
						</div>
						<!-- Footer Contact Box End -->
					</div>

					<div class="col-lg-4">
						<!-- Footer Contact Box Start -->
						<div class="footer-contact-box wow fadeInUp" data-wow-delay="0.75s">
							<div class="contact-icon-box">
								<img src="images/icon-location.svg" alt="">
							</div>

							<div class="footer-contact-info">
								<h3>Our Location</h3>
								<p>Black Diamond,Plot.No. L6 -L7, 3<sup>rd</sup> Cross Road, Thiru-vi-ka Industrial Estate, Guindy, Chennai - 600 032</p>
							</div>
						</div>
						<!-- Footer Contact Box End -->
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Contact End -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Mega Footer Start -->
					<div class="mega-footer">
						<div class="row">
							<div class="col-lg-2 col-md-12">
								<!-- Footer About Start -->
								<div class="footer-about">
									<figure>
										<img src="images/logo.png" alt="" class="img-main">
									</figure>
									<!--	<p>Lorem Ipsum</p>-->
								</div>
								<!-- Footer About End -->

								<!-- Footer Social Link Start -->
								<div class="footer-social-links">
									<ul>

										<li><a href="https://www.linkedin.com/company/bgrtech/"><i
													class="fa-brands fa-linkedin-in"></i></a></li>
										<li><a href="#"><img src="images/Twitter_25x25.png" alt
													style="height: 12px;"></a></li>
										<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
										<!--<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>-->
									</ul>
								</div>
								<!-- Footer Social Link End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<h2>Products</h2>
									<ul>
										<li><a href="oil-and-gas-products.php">Oil and
												Gas Processing</a></li>
										<li><a href="heat-exchangers.php">Heat
												Exchangers</a></li>
										<li><a href="green-hydrogen-products.php">Hydrogen</a></li>
										<li><a href="others.php">Others</a></li>
									</ul>
								</div>
								<div class="footer-links" style="margin-top: 20px;">
									<h2>Quick Links</h2>
									<ul>
										<li><a href="careers.php">Careers</a></li>
										<li><a href="blog.php">Blog</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="Corporate-Info.php">Corporate Info</a></li>
										<li><a href="Privacy-Policy.php">Privacy Policy</a></li>
									</ul>
								</div>
								<!-- Footer Links End -->
							</div>

							<div class="col-lg-4 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<h2>Projects</h2>
									<ul>
										<li><a href="integrated-surface-facilities.php">Integrated Surface
												Facilities/Early Production Facilities</a></li>
										<li><a href="gas-processing-plant.php">Gas
												Gathering/Processing</a></li>

										<li><a href="hydrogen-generation-purification-storage.php">Hydrogen Generation,
												Purification
												& Storage</a></li>
										<li><a href="api650-storage-tanks.php">API 650
												Storage Tanks</a></li>
									</ul>
								</div>
								<!-- Footer Links End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<h2>Services</h2>
									<ul>
										<li><a href="technical-engineering-services.php">Technical Engineering
												Services</a></li>
										<li><a href="feasibility-study.php">Feasibility
												Study</a></li>
										<li><a href="feed-engineering.php">FEED
												Engineering</a></li>
									</ul>
								</div>
								<!-- Footer Links End -->
							</div>
						</div>
					</div>
					<!-- Mega Footer End -->

					<!-- Copyright Footer Start -->
					<div class="footer-copyright">
						<div class="row">
							<div class="col-md-12">
								<!-- Footer Copyright Content Start -->
								<div class="footer-copyright-text">
									<p>Copyright © 2024 BGR Tech. All rights reserved.</p>
								</div>
								<!-- Footer Copyright Content End -->
							</div>
						</div>
					</div>
					<!-- Copyright Footer End -->
				</div>
			</div>
		</div>
	</footer>
	
	 <div id="myModal" class="modal" >
  <!-- Modal content -->
  <div class="modal-content">
    <span class="closepopup">&times;</span>
    <p style="font-size: 25px;text-align: center;margin: 15px;margin-bottom: 16px;"><strong>Thank you ! </strong></p>
    <p style="font-size: 25px;text-align: center;margin: 45px;margin-top:5px;padding-top:0px;">We will get back to you shortly.</p>
  </div>
</div>

	<!-- Footer End -->
	<a href="https://api.whatsapp.com/send?phone=+917397698191&amp;text=Hello" class="whatsapp-float" target="_blank">
		<i class="bi bi-whatsapp"></i>
	</a>
	<!-- Jquery Library File -->
	<script src="js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Validator js file -->
	<script src="js/validator.min.js"></script>
	<!-- SlickNav js file -->
	<script src="js/jquery.slicknav.js"></script>
	<!-- Swiper js file -->
	<script src="js/swiper-bundle.min.js"></script>
	<!-- Counter js file -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Magnific js file -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
	<!-- Parallax js -->
	<script src="js/parallaxie.js"></script>
	<!-- MagicCursor js file -->
	<script src="js/gsap.min.js"></script>
	<script src="js/magiccursor.js"></script>
	<!-- Text Effect js file -->
	<script src="js/splitType.js"></script>
	<script src="js/ScrollTrigger.min.js"></script>
	<!-- Wow js file -->
	<script src="js/wow.js"></script>
	<!-- Main Custom js file -->
	<script src="js/function.js"></script>
	<script src="../../../assets/js/theme-panel.js"></script>
	
	  <script>
    $(function () {
        

          function isEmailValid(str) {
            if (/^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/.test(str)) {
                return false;
            }
            return true;
        }

        function hasWhiteSpace(s) {
            var regex = /\s/;
            if (regex.test(s)) {
                return true;
            } else {
                return false;
            }
        }
        function validData(s) {
            var regex = /^[a-zA-Z\s]+$/;
            if (regex.test(s)) {
                console.log("true")
                return true;
            } else {
                console.log("false")
                return false;
            }
        }

        function validate(event) {
            const pattern = /[0-9]/;
            let inputChar = String.fromCharCode(event.charCode);
            if (event.keyCode != 8 && !pattern.test(inputChar)) {
                event.preventDefault();
            }
        }

        function validateContact(event) {
            const pattern = /^[0-9]+$/;
            if (!pattern.test(event)) {
                return true;
            } else {
                return false;
            }
        }
        
        $('form').on('submit', function (e) {
            
             is_error = false;
            $(".help").text("");

            firstname = $.trim($("#name").val());
            email = $.trim($("#email").val());
            contact = $.trim($("#phone").val());
            qualification = $.trim($("#qualification").val());
            skills = $.trim($("#skills").val());
            
            let fileInput = $("#attachment")[0];
				let file = fileInput.files[0];
				let allowedExtensions = /(\.doc|\.docx|\.pdf)$/i;
				if (!file) {
					$("#attachment").next(".help").text("Please select file");
					is_error = true;
				} else if (!allowedExtensions.exec(file.name)) {
					$("#attachment").next(".help").text("Only Doc, Pdf files are allowed.");
					is_error = true;
				}

          
            if (firstname == "") {
                $("#name").next(".help").text("Please enter the Name");
                is_error = true;
            } else if (firstname.length > 100) {
                $("#name").next(".help").text("First name should be less than 100 characters");
                is_error = true;
            } else if (!validData(firstname)) {
                $("#name").next(".help").text("Please enter the Valid First Name");
                is_error = true;
            }

          

            if (email == "") {
                $("#email").next(".help").text("Please enter Email");
                is_error = true;
            } else if (isEmailValid(email)) {
                $("#email").next(".help").text("Invalid Email");
                is_error = true;
            }



            if (contact.length < 0) {
                $("#phone").next(".help").text("Please enter the Contact Number");
                is_error = true;
            } else if (validateContact(contact)) {
                $("#phone").next(".help").text("Please enter the valid Contact Number");
                is_error = true;
            } else if (contact.length < 10) {
                $("#phone").next(".help").text("Please enter the valid Contact Number");
                is_error = true;
            } else if (contact.length > 10) {
                $("#phone").next(".help").text("Ensure this field has no more than 10 characters.");
                is_error = true;
            }

            if (qualification == "") {
                $("#qualification").next(".help").text("Please enter your qualification");
                is_error = true;
            }else if(!validData(qualification)){
                 $("#qualification").next(".help").text("Please enter valid qualification");
                is_error = true;
            }
            if (skills == "") {
                $("#skills").next(".help").text("Please enter your skills");
                is_error = true;
            }else if(!validData(skills)){
                 $("#skills").next(".help").text("Please enter valid skills");
                is_error = true;
            }


            e.preventDefault(); // Prevent the default form submission

            // Create a FormData object
            var formData = new FormData(this);
if (is_error == false) {
    $.ajax({
                type: 'POST',
                url: 'career-enquiry.php', // PHP script to handle the form submission
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Don't set content type
                success: function (response) {
                     // Empty the form
                    $('form').trigger('reset');
                               var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("formSubmitnow");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closepopup")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
  modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Log any errors
                    alert("Oops! Something went wrong. Please try again.");
                }
            });
}
            
        });
    });
</script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    if (!urlParams.has('cid') || urlParams.get('cid').trim() === '') {
        window.location.href = 'careers.php';
    }
</script>
</body>

</html>