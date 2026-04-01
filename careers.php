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
			background-image: url(images/careers_header.jpg);
			position: relative;
			background-size: contain;
			padding: 260px 0 100px;
			margin-top: -162px;
			overflow: hidden;
		}

		.our-projects {
			padding-top: 10px !important;
		}

		.container {
			max-width: 1300px !important;
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
						<h1 class="text-anime">Careers</h1>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->



	<!-- Our Process Section Start -->
	<div class="our-process">
		<div class="container">

			<div class="row">

				<div class="col-lg-12">
					<!-- Team Member Information Start -->
					<div class="team-single-information-">
						<div class="team-single-header wow fadeInUp pb-50" data-wow-delay="0.25s">
							<h2>Ready to launch your career with us? </h2>

							<p>At BGR Tech, we combine an informal, yet professional work environment where merit and
								performance are the main guiding factors. We believe there are no limits for a
								star-performer, and we are actively committed to provide the right space towards
								holistic development. We're on the lookout for our next stars who are passionate,
								innovative individuals, eager to make a difference.
							</p>
							<p>Join our dynamic team and ignite your career! You'll find a collaborative work culture,
								endless opportunities for growth. Together, let's redefine what's possible and achieve
								greatness. Be part of our journey—apply now and shape the future with us!
							</p>



						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<!-- Our Process Section End -->


	<div class="our-projects">
		<div class="container">
			<div class="row">
			    <?php $ret=mysqli_query($con,"SELECT * FROM tbl_careers_list WHERE Is_Active=1 ORDER BY SubCategoryId DESC");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
							  
				<div class="col-lg-3 col-md-6">
					<!-- Project Item Start -->
					<div class="project-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="project-image">
							<figure>
								<img src="<?php echo "admin/careers/".$row['post_image'];  ?>" alt="">
							</figure>
						</div>

						<div class="project-content">
							<p><a style="color:#000;" href="career-details.php?cid=<?php echo $row['SubCategoryId']?>"><?php echo $row['CategoryId']?></a></p>
							<!--<p>Senior Engineer / Engineer - Production</p>-->
						</div>

					</div>
					<!-- Project Item End -->
				</div>

   <?php $cnt=$cnt+1; }?>
   
				<!--<div class="col-lg-3 col-md-6">-->
					<!-- Project Item Start -->
				<!--	<div class="project-item wow fadeInUp" data-wow-delay="0.25s">-->
				<!--		<div class="project-image">-->
				<!--			<figure>-->
				<!--				<img src="images/project-1.jpg" alt="">-->
				<!--			</figure>-->
				<!--		</div>-->

				<!--		<div class="project-content">-->
				<!--			<h2><a href="career-details1.php">Engineer</a></h2>-->
				<!--			<p>Engineer or Sr. Engineer or Dy. Mgr - BD Hydrogen-->
				<!--			</p>-->
				<!--		</div>-->

				<!--	</div>-->
					<!-- Project Item End -->
				<!--</div>-->

				<!--<div class="col-lg-3 col-md-6">-->
					<!-- Project Item Start -->
				<!--	<div class="project-item wow fadeInUp" data-wow-delay="0.25s">-->
				<!--		<div class="project-image">-->
				<!--			<figure>-->
				<!--				<img src="images/project-1.jpg" alt="">-->
				<!--			</figure>-->
				<!--		</div>-->

				<!--		<div class="project-content">-->
				<!--			<h2><a href="career-details2.php">Manager</a></h2>-->
				<!--			<p>Deputy Manager / Senior Engineer - Process Design-->
				<!--			</p>-->
				<!--		</div>-->

				<!--	</div>-->
					<!-- Project Item End -->
				<!--</div>-->

				<!--<div class="col-lg-3 col-md-6">-->
					<!-- Project Item Start -->
				<!--	<div class="project-item wow fadeInUp" data-wow-delay="0.25s">-->
				<!--		<div class="project-image">-->
				<!--			<figure>-->
				<!--				<img src="images/project-1.jpg" alt="">-->
				<!--			</figure>-->
				<!--		</div>-->

				<!--		<div class="project-content">-->
				<!--			<h2><a href="career-details3.php">Executive</a></h2>-->
				<!--			<p>Senior Executive / Executive - F&A-->
				<!--			</p>-->
				<!--		</div>-->

				<!--	</div>-->
					<!-- Project Item End -->
				<!--</div>-->






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
									<!--<p>Lorem Ipsum</p>-->
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
</body>

</html>