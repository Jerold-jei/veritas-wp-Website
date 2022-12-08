<?php
/* Template Name: Home Page */
get_header();

// $post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Banner Section Start -->
<section class="first-section banner-swiper-section">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slider-div">
                <div class="container-fluid wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-content" data-aos="fade-right">
                                <h4 class="montserrat-bold">
                                    <?php echo get_theme_mod('first_swiper_title') ?>
                                </h4>
                                <p class="montserrat-semibold"><?php echo get_theme_mod('first_swiper_description') ?></p>
                                <a href="<?php echo home_url('/'); ?>/latest-procedures" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slider-div">
                <div class="container-fluid wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-content" data-aos="fade-right">
                                <h4 class="montserrat-bold">
                                    <?php echo get_theme_mod('second_swiper_title') ?>
                                </h4>
                                <p class="montserrat-semibold">
                                    <?php echo get_theme_mod('second_swiper_description') ?>
                                </p>
                                <a href="/patient-network.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slider-div">
                <div class="container-fluid wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-content" data-aos="fade-right">
                                <h4 class="montserrat-bold">
                                    <?php echo get_theme_mod('third_swiper_title') ?>
                                </h4>
                                <p class="montserrat-semibold">
                                    <?php echo get_theme_mod('third_swiper_description') ?>
                                </p>
                                <a href="/latest-procedure.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slider-div">
                <div class="container-fluid wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-content" data-aos="fade-right">
                                <h4 class="montserrat-bold"> 
                                    <?php echo get_theme_mod('fourth_swiper_title') ?>
                                </h4>
                                <p class="montserrat-semibold"> 
                                    <?php echo get_theme_mod('fourth_swiper_description') ?>
                                </p>
                                <a href="/prevention.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="banner-bottom-card">
        <div class="bottom-card-content">
            <div class="bottom-card-text">
                <h5 class="montserrat-bold">
                <?php echo get_theme_mod('lets_get_started') ?>
            </h5>
            </div>
            <div class="bottom-card-btn">
                <p><?php echo get_theme_mod('make_an_appointment') ?></p>
                <span>For a... </span>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Aboout Us Section Start -->
<section class="about-sec">
    <div class="container-fluid">
        <div class="row about-content-row">
            <div class="col-md-6">
                <div class="about-img" data-aos="fade-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dr-venkat-p a.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content" data-aos="fade-left">
                    <h4 class="montserrat-bold green-color common-head"><?php echo get_theme_mod('about_us_section_title') ?></h4>
                    <p class="common-para"><?php echo get_theme_mod('about_us_section_description') ?></p>
                    <a href="aboutus.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aboout Us Section End -->

<!-- Services section start -->

<section class="service-sec">
    <div class="swiper serviceSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_first_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_first_swiper_description') ?></p>
                                    <a href="breast.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-09.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_second_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_second_swiper_description') ?></p>
                                    <a href="colorectal.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-10.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_third_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_third_swiper_description') ?></p>
                                    <a href="gastrointestinal.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-09.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_fourth_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_fourth_swiper_description') ?></p>
                                    <a href="gynecological.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-10.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_fivth_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_fivth_swiper_description') ?></p>
                                    <a href="peritoneal.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-09.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_sixth_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_sixth_swiper_description') ?></p>
                                    <a href="hepatobiliary.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-10.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_seventh_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_seventh_swiper_description') ?></p>
                                    <a href="head-and-neck.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-09.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-swiper-content-div">
                    <div class="container-fluid">
                        <div class="row service-swiper-content-row">
                            <div class="col-md-6">
                                <div class="service-content">
                                    <h4 class="montserrat-bold white-color common-head"><?php echo get_theme_mod('home_services_section_swiper_title') ?></h4>
                                    <h6 class="service-small-head golden-color montserrat-bold"><?php echo get_theme_mod('home_services_section_eighth_swiper_title') ?></h6>
                                    <p class="common-para white-color"><?php echo get_theme_mod('home_services_section_eighth_swiper_description') ?></p>
                                    <a href="thorax.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-10.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Why Choose us section start -->
<section class="why-choose-sec">
    <div class="container-fluid">
        <div class="row why-choose-head-row">
            <div class="col-md-9">
                <div class="why-choose-head" data-aos="fade-up">
                    <h4 class="montserrat-bold green-color common-head"><?php echo get_theme_mod('why_choose_us_section_title') ?></h4>
                    <p class="common-para"><?php echo get_theme_mod('why_choose_us_section_description') ?></p>
                    <a href="aboutus.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row why-choose-bg-row">
            <div class="col-md-10">
                <div class="why-choose-bg">
                    <div class="row why-choose-row">
                        <div class="col-md-7">
                            <div class="choose-quote-text" data-aos="fade-right">
                                <h5 class="montserrat-semibold-italic">
                                    <?php echo get_theme_mod('why_choose_us_section_quote') ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="scroll-choose-content" data-aos="fade-left">
                                <p class="parallax-move"><?php echo get_theme_mod('why_choose_us_section_first_para') ?></p>
                                <p class="parallax-move"><?php echo get_theme_mod('why_choose_us_section_second_para') ?></p>
                                <p class="parallax-move"><?php echo get_theme_mod('why_choose_us_section_third_para') ?></p>
                                <p class="parallax-move"><?php echo get_theme_mod('why_choose_us_section_fourth_para') ?></p>
                                <p class="parallax-move"><?php echo get_theme_mod('why_choose_us_section_fivth_para') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="latest-procedure-sec">
    <div class="container-fluid latest-procedure-head">
        <div class="row">
            <div class="col-md-6 text-left" data-aos="fade-right">
                <h4 class="montserrat-bold green-color common-head"><?php echo get_theme_mod('home_latest_procedure_section_title') ?></h4>
            </div>
            <div class="col-md-6 text-right" data-aos="fade-left">
                <a href="latest-procedure.php" class="veritas-btn">View All <i class="fa fa-angle-right"></i> </a>
            </div>
        </div>
    </div>
    <div class="latest-procedure-swiper-div">
        <div class="swiper-container latest-procedure-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="latest-procedure-card">
                        <a href="latest-procedure.php">
                            <div class="latest-procedure-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/procedure-img1.png" class="img-fluid" />
                            </div>
                            <div class="latest-procedure-card-content">
                                <h6 class="montserrat-bold"><?php echo get_theme_mod('home_latest_procedure_section_first_swiper_title') ?></h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="latest-procedure-card">
                        <a href="hipec.php">
                            <div class="latest-procedure-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/procedure-img2.png" class="img-fluid" />
                            </div>
                            <div class="latest-procedure-card-content">
                                <h6 class="montserrat-bold"><?php echo get_theme_mod('home_latest_procedure_section_second_swiper_title') ?></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="latest-procedure-card">
                        <a href="pipac.php">
                            <div class="latest-procedure-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/procedure-img1.png" class="img-fluid" />
                            </div>
                            <div class="latest-procedure-card-content">
                                <h6 class="montserrat-bold"><?php echo get_theme_mod('home_latest_procedure_section_third_swiper_title') ?></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="latest-procedure-card">
                        <a href="fluorescence.php">
                            <div class="latest-procedure-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/procedure-img2.png" class="img-fluid" />
                            </div>
                            <div class="latest-procedure-card-content">
                                <h6 class="montserrat-bold"><?php echo get_theme_mod('home_latest_procedure_section_fourth_swiper_title') ?></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="latest-procedure-card">
                        <a href="eras.php">
                            <div class="latest-procedure-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/procedure-img1.png" class="img-fluid" />
                            </div>
                            <div class="latest-procedure-card-content">
                                <h6 class="montserrat-bold"><?php echo get_theme_mod('home_latest_procedure_section_fivth_swiper_title') ?></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-vertical montserrat-bold"></div>
            <p class="counter">0<span class="current-slide">current-slide</span> </p>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

</section>





<!-- Becoming a Patient Section Starts  -->
<section class="patient-sec  padding-zero">
    <div class="container-fluid wrapper">
        <div class="row patient-content-row">
            <div class="col-md-6 flex-center-row">
                <div class="patient-content">
                    <h1 class="montserrat-bold golden-color common-head"><?php echo get_theme_mod('becoming_patient_section_title') ?></h1>
                    <p class="common-para white-color"><?php echo get_theme_mod('becoming_patient_section_description') ?></p>
                    <a href="patient-network.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="patient-img">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-06.png">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Becoming a Patient End  -->
<!-- Prevention Section Starts  -->
<section class="prevention-sec">
    <div class="container-fluid wrapper">
        <div class="row prevention-content-row">
            <div class="col-md-6 prevention-col">
                <div class="prevention-img">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/NURSE.png">
                </div>

            </div>

            <div class="col-md-6">
                <div class="prevention-content">
                    <h1 class="prevention-head green-color montserrat-bold"><?php echo get_theme_mod('home_prevention_section_title') ?></h1>
                    <p class="prevention-p grey-color"><?php echo get_theme_mod('home_prevention_section_first_para') ?></p>
                    <p class="prevention-p grey-color"><?php echo get_theme_mod('home_prevention_section_second_para') ?></p>
                    <p class="prevention-p grey-color"><?php echo get_theme_mod('home_prevention_section_third_para') ?></p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Prevention Section End  -->
<!-- Screening Section Starts  -->
<section class="screening-sec">
    <div class="container-fluid wrapper">
        <div class="row screening-content-row">
            <div class="col-md-6 flex-center-row">
                <div class="screening-content">
                    <h1 class="common-head green-color montserrat-bold"><?php echo get_theme_mod('home_screening_clinics_section_title') ?></h1>
                    <p class="common-p grey-color"><?php echo get_theme_mod('home_screening_clinics_section_first_para') ?></p>

                    <p class="common-p grey-color"><?php echo get_theme_mod('home_screening_clinics_section_second_para') ?></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="img-1 position-relative">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-03.jpg">
                </div>
                <div class="bot-image position-absolute">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ASSETS-04.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Screening Section End  -->

<?php
//  include 'footer.php' 

get_footer();
?>