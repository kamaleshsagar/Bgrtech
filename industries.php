<!DOCTYPE html>
<html lang="zxx">

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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        figure {
            margin: 0px;
        }

        .div1 {
            background-color: #4ac15826;
            padding: 30px;
            border-radius: 25px;
        }

        .div2 {
            padding: 30px;
            background-color: #02a6f029;
            border-radius: 25px;
        }

        .project-item h2 {
            padding-bottom: 10px;
        }

        .project-item p {
            margin-bottom: 8px;
        }


        .page-header {
            position: relative;
            background-image: url(images/industries_header.jpg);
            /*background: url(../images/header-banner.jpeg) no-repeat center center;*/
            background-size: contain;
            padding: 260px 0 100px;
            margin-top: -162px;
            overflow: hidden;
        }

        .step-item.step-1 .step-header:after {
            display: none !important;
        }

        .step-item.step-2 .step-header:after {
            display: none !important;
        }

        .step-header {
            margin-bottom: 10px !important;
        }

        .step-icon figure img {
            width: 80px;
        }

        .team-content p {
            font-size: 14px;
        }

        .team-single-information {
            overflow: auto;
            /* height: 400px; */
        }

        button {
            background-color: transparent;
            /* Removes background */
            border: none;
            /* Removes border */
            outline: none;
            /* Removes outline */
            cursor: pointer;
            margin-left: auto;
        }

        .team-content {
            position: relative !important;
            bottom: 0px !important;
        }

        .step-content h3 {
            font-size: 16px;
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
                        <h1 class="text-anime">Industries</h1>
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
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <!--<h3 class="wow fadeInUp">Our Latest Process</h3>-->
                        <h2 class="text-anime">Industries</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item step-1 wow fadeInUp" data-toggle="modal" data-target="#industry1"
                        data-wow-delay="0.25s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Power-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Power Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item step-2 wow fadeInUp" data-toggle="modal" data-target="#industry2"
                        data-wow-delay="0.5s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Oil-and-Gas-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Oil and Gas Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry3">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Petrochemical-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Petrochemical Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry4">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Hydrogen-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Hydrogen Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry5">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Ammonia-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Ammonia Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry6">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Fertilizer-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Fertilizer Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry7">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Steel-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Steel Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry8">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Water-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Water Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry9">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Pharma-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Pharma Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry10">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Semiconductor.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Semiconductor Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry11">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Waste-Management.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Waste Management Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry12">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Glass-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Glass Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry13">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Plastic-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Plastic Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry14">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Food-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Food Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry15">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Mining-and-Minerals.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Mining and Minerals Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
                <div class="col-md-3">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s" data-toggle="modal"
                        data-target="#industry16">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="images/icons/Cement-Plant-Industry.png" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Cement Plant Industry</h3>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Process Section End -->




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
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
    <div class="modal fade" id="industry1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Power-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Power Industry </h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Primary/Secondary Gas Conditioning Skid (for GT, Gas
                                                            Compressor/Boilers/Furnace/Steel
                                                            Plant) </li>
                                                        <li>Air Cooler Heat Exchanger (Natural/Forced/Induced Draft
                                                            Cooler) </li>
                                                        <li>Economizer (Water Heater/Process Heater) </li>
                                                        <li>Air Heaters – Steam to air, Effluent to Air, Flue Gas to Air
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="industry2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Oil-and-Gas-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Oil and Gas Industry </h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Inlet/Production/Test Manifold Skid </li>
                                                        <li>Bath Heater (IDBH, Natural Draft/Forced Draft/Gas Fired/Oil
                                                            Fired/Dual Fuel Fired) </li>
                                                        <li>Heater Treater (Conventional Direct Fired/Electrostatic)
                                                        </li>
                                                        <li>Test Separator (Mobile/Trailer Mounted/Skid Mounted) </li>
                                                        <li>Production Separator/Group Separator (2 Phase/3 Phase) </li>
                                                        <li>Knock-Out Drum (Inlet KOD for Gas/Air/N2 Compressor/Gas
                                                            Burner) </li>
                                                        <li>Flare KOD (Vertical/Horizontal) </li>
                                                        <li>Flare Seal Drum/Flare Stack </li>
                                                        <li>Pig Launcher/Pig Receiver or Scrubber Launcher/Receiver
                                                        </li>
                                                        <li>GDU - Gas Dehydration Unit </li>
                                                        <li>GSU - Gas Sweetening Unit </li>
                                                        <li>CO2 Capturing/Removal (Dry Type) </li>


                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="industry3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Petrochemical-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Petrochemical Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Desalter Vessel (Electrostatic/Dual Polar/Dual Frequency)
                                                        </li>
                                                        <li>Desander (Cyclone Separator) </li>
                                                        <li>Glycol Contactor (Random Packed Column, Bubble Tray, Chimney
                                                            Tray) </li>
                                                        <li>Stripping Column </li>
                                                        <li>Mole-sieve Gas Sweetener Unit (H2S) </li>
                                                        <li>Dryer Unit (Air, Gas, H2 Dryer - PSA/TSA) </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Hydrogen-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Hydrogen Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Green H2 BOS (Surge Tank, Suction Filters, Circulation Pump,
                                                            H2 & O2 Separators ,
                                                            Scrubber) </li>
                                                        <li>Green H2 BOP (De-oxy Tower, TSA Dryer Unit, Electric
                                                            Heaters, S&T Exchanger, Chiller
                                                            Unit) </li>
                                                        <li>ACHE </li>
                                                        <li>Shell & tube exchanger </li>
                                                        <li>Electric Process Heater </li>


                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Ammonia-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Ammonia Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Ammonia Storage Tank (Low Temperature Service with
                                                            Compressor, Chiller Unit, Pump Skid)</li>
                                                    </ul>


                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Fertilizer-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Fertilizer Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Jacketed Vessel </li>
                                                        <li>Stripping Column </li>
                                                        <li>Chemical Bulk Storage Tank (ASME/API 650) </li>
                                                        <li>ACHE </li>
                                                        <li>Shell & Tube exchangers </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Steel-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Steel Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Jacketed Vessel </li>
                                                        <li>Stripping Column </li>
                                                        <li>Chemical Bulk Storage Tank (ASME/API 650) </li>
                                                        <li>ACHE </li>
                                                        <li>Shell & Tube exchangers </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Water-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Water Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Equipment Water Treatment Plant (Sand Filter/Multi-Media
                                                            Filter/Activated Carbon Filter)
                                                        </li>
                                                        <li>Water Treatment Plant (RO-DM/Pretreatment, Degasser, RO, DM,
                                                            Storage) </li>
                                                        <li>EDI – Electro de-ionizing unit – DI water storage tank </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Pharma-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Pharma Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Cartridge Filter/Carbon Filter </li>
                                                        <li>Agitator Vessel/Mixer </li>
                                                        <li>ACHE </li>
                                                        <li>Ultra Pure Water Treatment </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Semiconductor.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Semiconductor Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>RO - EDI – Electro de-ionizing unit – DI water storage tank
                                                        </li>
                                                        <li>Dryers (PSA/TSA) </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Waste-Management.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Waste Management Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Effluent Storage Tank </li>
                                                        <li>Condensate Storage Tank </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Glass-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Glass Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Air Heaters (Flue Gas to Air / Steam to air / effluent to
                                                            air) </li>
                                                        <li>ACHE </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Plastic-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Plastic Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Surge Vessel </li>
                                                        <li>Jacketed Vessel </li>
                                                        <li>Air Heaters (Flue Gas to Air / Steam to air / effluent to
                                                            air</li>
                                                        <li>ACHE </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Food-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Food Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Chemical Day Tank/ storage Vessel (ASME) </li>
                                                        <li>Storage Tanks for Water/Chemicals </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Mining-and-Minerals.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Mining and Minerals Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Cyclone Separator (Dust Separator/Sand Separator, Free
                                                            Liquid Separator) </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="industry16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="our-team" style="padding:0px;">
                        <div class="container">

                            <div class="page-team-single" style="padding-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Team Single Image Start -->
                                            <div class="step-header">
                                                <div class="step-icon">
                                                    <figure>
                                                        <img src="images/icons/Cement-Plant-Industry.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- Team Single Image End -->
                                        </div>

                                        <div class="col-lg-7">
                                            <!-- Team Member Information Start -->
                                            <div class="team-single-information">
                                                <div class="team-single-header">
                                                    <h2>Cement Plant Industry</h2>
                                                </div>

                                                <div class="team-single-content">
                                                    <ul>
                                                        <li>Air Cooler Exchanger </li>
                                                        <li>Economizer </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- Team Member Information End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>