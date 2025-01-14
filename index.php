<?php
session_start();
    require_once 'includes/database.php';

    $all_brand_query = "SELECT * FROM brands ";
    $all_brand_data_from_db = mysqli_query($db_connect, $all_brand_query);

    $all_service_query = "SELECT * FROM services WHERE status ='active' ORDER BY id DESC"; 
    $all_service_data_from_db = mysqli_query($db_connect, $all_service_query);


    $all_count_query = "SELECT * FROM counter";
    $all_count_data_from_db = mysqli_query($db_connect, $all_count_query);

    $all_portfolio_query = "SELECT * FROM portfolios";
    $all_portfolio_data_from_db = mysqli_query($db_connect, $all_portfolio_query);
    
    $all_testimonial_query = "SELECT * FROM testimonials ";
    $all_testimonial_data_from_db = mysqli_query($db_connect, $all_testimonial_query);
    
    $all_skill_query = "SELECT * FROM skills ";
    $all_skill_data_from_db = mysqli_query($db_connect, $all_skill_query);

    // social link query start
    $owner_fb_link_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='fb_link'";
    $all_owner_fb_link_data_from_db = mysqli_query($db_connect, $owner_fb_link_select_query);
    $owner_fb_Link_after_assoc = mysqli_fetch_assoc($all_owner_fb_link_data_from_db)['settings_value'];

    $owner_tw_link_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='tw_link'";
    $all_owner_tw_link_data_from_db = mysqli_query($db_connect, $owner_tw_link_select_query);
    $owner_tw_link_after_assoc = mysqli_fetch_assoc($all_owner_tw_link_data_from_db)['settings_value'];
    
    $owner_insta_link_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='insta_link'";
    $all_owner_insta_link_data_from_db = mysqli_query($db_connect, $owner_insta_link_select_query);
    $owner_insta_link_after_assoc = mysqli_fetch_assoc($all_owner_insta_link_data_from_db)['settings_value'];
    // social link query end

    //====-- Genaral All text_settings query start --==========
    $owner_name_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='owner_name'";
    $all_owner_name_data_from_db = mysqli_query($db_connect, $owner_name_select_query);

    $owner_bio_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='owner_bio'";
    $all_owner_bio_data_from_db = mysqli_query($db_connect, $owner_bio_select_query);

    $owner_about_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='owner_about'";
    $all_owner_about_data_from_db = mysqli_query($db_connect, $owner_about_select_query);

    $testimonial_header_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='testimonial_header'";
    $all_testimonial_header_data_from_db = mysqli_query($db_connect, $testimonial_header_select_query);

    $contact_info_bio_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='contact_info_bio'";
    $all_contact_info_bio_data_from_db = mysqli_query($db_connect, $contact_info_bio_select_query);

    $office_in_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='office_in'";
    $all_office_in_data_from_db = mysqli_query($db_connect, $office_in_select_query);

    $address_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='address'";
    $all_address_data_from_db = mysqli_query($db_connect, $address_select_query);
    $all_address_after_assoc_from_db = mysqli_fetch_assoc(mysqli_query($db_connect, $address_select_query))['settings_value'];
    

    $phone_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='phone'";
    $all_phone_data_from_db = mysqli_query($db_connect, $phone_select_query);
    $all_phone_after_assoc_from_db = mysqli_fetch_assoc($all_phone_data_from_db)['settings_value'];


    $email_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='email'";
    $all_email_data_from_db = mysqli_query($db_connect, $email_select_query);
    $all_email_after_assoc_from_db = mysqli_fetch_assoc($all_email_data_from_db)['settings_value'];

    $copyright_select_query = "SELECT settings_value FROM text_settings WHERE settings_name='copyright'";
    $all_copyright_data_from_db = mysqli_query($db_connect, $copyright_select_query);
    // image settings part 
    $all_image_settings_query = "SELECT * FROM image_settings ";
    $all_image_settings_data_from_db = mysqli_query($db_connect, $all_image_settings_query);
    $image_settings_after_assoc = mysqli_fetch_assoc($all_image_settings_data_from_db);

    //=====---- Genaral All text_settings query End --=======

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lion Project</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">

                                    <a href="index.php" class="navbar-brand logo-sticky-none"><h2>web_saiful</h2></a>
                                    <!-- <img src="img/logo/logo.png" alt="Logo"> -->
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                            <li class="nav-item">
                                                <a class=" mt-3 btn btn-outline-white btn-sm text-warning" color="white" mdbbtn="" outline="true" size="sm" target="_blank" href="login.php">Log In</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.php">
                        <h3>web_saiful</h3>
                        <!-- <img src="img/logo/logo.png" alt="" /> -->
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$all_address_after_assoc_from_db?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$all_phone_after_assoc_from_db?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$all_email_after_assoc_from_db?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a target="blank" href="<?=$owner_fb_Link_after_assoc?>"><i class="fab fa-facebook-f"></i></a>
                    <a target="blank" href="<?=$owner_tw_Link_after_assoc?>"><i class="fab fa-twitter"></i></a>
                    <a target="blank" href="<?=$owner_insta_Link_after_assoc?>"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=mysqli_fetch_assoc($all_owner_name_data_from_db)['settings_value']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=mysqli_fetch_assoc($all_owner_bio_data_from_db)['settings_value']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                    <!-- fb link development -->
                                    <?php

                                    if($owner_fb_Link_after_assoc):2
                                    ?>
                                        <li><a href="<?=$owner_fb_Link_after_assoc?>" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <?php endif; ?>

                                    <!-- twitter link development -->
                                    <?php

                                    if($owner_tw_link_after_assoc):
                                    ?>
                                        <li><a href="<?=$owner_tw_link_after_assoc?>" target="blank"><i class="fab fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <!-- Instagram link development -->
                                    <?php

                                    if($owner_insta_link_after_assoc):
                                    ?>
                                        <li><a href="<?=$owner_insta_link_after_assoc?>" target="blank"><i class="fab fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    
                                    </ul>
                                </div>
                                <a href="#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="<?=$image_settings_after_assoc['banner_image_value']?>" alt="">
                                <!-- Orginal banner image link (img/banner/banner_img.png) -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="<?=$image_settings_after_assoc['about_image_value']?>" title="me-01" alt="me-01">
                                <!--about orginal image img/banner/banner_img2.png -->
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=mysqli_fetch_assoc($all_owner_about_data_from_db)['settings_value']?></p>
                                <h3>My Skills :</h3>
                            </div>
                            <?php foreach($all_skill_data_from_db as $skills): ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?=$skills['skill_name']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$skills['skill_header']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$skills['skill_percentage']?>;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                    <!-- Service Part Development start -->
                    <?php foreach($all_service_data_from_db as $service){
                    ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['service_icon'] ?>"></i>
								<h3><?= $service['service_title'] ?></h3>
								<p>
									<?= $service['service_description'] ?>
								</p>
							</div>
						</div>
                    <?php } ?>
                    <!-- Service Part Development End -->
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach($all_portfolio_data_from_db as $portfolios): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="image/portfolio_image/thumbnail/<?=$portfolios['portfolio_thumbnail']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>My Work</span>
									<h4><a href="#"><?=$portfolios['portfolio_title']?></a></h4>
									<a href="portfolio-single.php?id=<?=$portfolios['id']?>" class="arrow-btn" target="blank">More information <span></span></a>
								</div>
							</div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                        <?php
                            foreach($all_count_data_from_db as $counter):
                        ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$counter['count_icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$counter['count_number'] ?></span></h2>
                                        <span><?=$counter['count_title'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2><?= mysqli_fetch_assoc($all_testimonial_header_data_from_db)['settings_value'] ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                            <?php foreach($all_testimonial_data_from_db as $testimonials): ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img class="rounded-circle" src="image/testimonial_image/<?=$testimonials['customer_image']?>" alt="img" width="100px" height="100px">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?=$testimonials['customer_opinion']?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$testimonials['customer_name']?></h5>
                                            <span><?=$testimonials['customer_company']?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                    <?php foreach($all_brand_data_from_db as $brand): ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="image/brand_image/<?=$brand['brand_image_name']?>" alt="img not found">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=mysqli_fetch_assoc($all_contact_info_bio_data_from_db)['settings_value']?></p>
                                <h5>OFFICE IN <span><?=mysqli_fetch_assoc($all_office_in_data_from_db)['settings_value']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$all_address_after_assoc_from_db?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$all_phone_after_assoc_from_db?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$all_email_after_assoc_from_db?></li>
                                        <li><i class="fas fa-envelope-open-text"></i><span>Fiverr :</span>Unavailable</li>
                                        <li><i class="fas fa-comment-dollar"></i><span>Freelancer :</span>Unavailable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact_post.php" method="POST">

                                <?php if(isset($_SESSION['contact_form_status'])): ?>
                                <div class="alert alert-success">
                                    <?php
                                        echo $_SESSION['contact_form_status'];
                                        unset($_SESSION['contact_form_status']);
                                    ?>
                                </div>
                                <?php endif; ?>

                                    <input type="text" placeholder="your name *" name="guest_name" required>
                                    <input type="email" placeholder="your email *" name="guest_email" required>
                                    <textarea id="message" placeholder="your message *" name="guest_message" required></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span><?=mysqli_fetch_assoc($all_copyright_data_from_db)['settings_value']?></span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5fef759ddf060f156a93214d/1eqvm6si0';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->
         
    </body>
</html>
