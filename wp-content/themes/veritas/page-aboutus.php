<?php

/* Template Name: About us Page */

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>
<!-- About us Banner Section Start -->
<section class="first-section banner-swiper-section about-us-banner">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="banner-content" data-aos="fade-right">
                    <h4 class="montserrat-bold  parallax-move "><?php echo get_field('about_us_page_banner_section_title', $post_id); ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us Banner Section End -->
<!-- Who we are section start -->
<section class="who-we-are" id="who-we-are">
    <div class="container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-8">
                <div class="who-we-are-content" data-aos="fade-up">
                    <h4 class="montserrat-bold green-color common-head  parallax-move"><?php echo get_field('about_us_page_who_we_are_section_title', $post_id); ?></h4>
                    <p class="common-para grey-color  parallax-move"><?php echo get_field('about_us_page_who_we_are_section_para_one', $post_id); ?></p>
                    <p class="common-para grey-color  parallax-move"><?php echo get_field('about_us_page_who_we_are_section_para_two', $post_id); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wrapper">
        <div class="row flex-center-row dots-points-row">
            <div class="col-md-10">
                <div class="who-we-are-links" data-aos="fade-right">
                    <h5 class="montserrat-bold green-color text-center  parallax-move"><?php echo get_field('about_us_page_who_we_are_links_title', $post_id); ?></h6>
                        <div class="who-we-are-links-row">
                            <a href="gynecological.php" class="who-we-are-links-card  parallax-move">
                                <p class="bullet montserrat-bold" href="gynecological.php"><?php echo get_field('about_us_page_who_we_are_link_one', $post_id); ?></p>
                            </a>
                            <a href="gastrointestinal.php" class="who-we-are-links-card  parallax-move">
                                <p class="bullet montserrat-bold" href="gastrointestinal.php"><?php echo get_field('about_us_page_who_we_are_link_two', $post_id); ?></p>
                            </a>
                            <a href="peritoneal.php" class="who-we-are-links-card  parallax-move">
                                <p class="bullet montserrat-bold" href="peritoneal.php"><?php echo get_field('about_us_page_who_we_are_link_three', $post_id); ?></p>
                            </a>
                            <a href="breast.php" class="who-we-are-links-card  parallax-move">
                                <p class="bullet montserrat-bold" href="breast.php"><?php echo get_field('about_us_page_who_we_are_link_four', $post_id); ?></p>
                            </a>
                            <a href="head-and-neck.php" class="who-we-are-links-card  parallax-move">
                                <p class="bullet montserrat-bold" href="head-and-neck.php"><?php echo get_field('about_us_page_who_we_are_link_five', $post_id); ?></p>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who we are section end -->

<!-- Vision and Mission Section start -->
<section class="vision-mission-sec" id="vision-mission-sec">
    <div class="overlay"></div>
    <div class="vision-container container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-9">
                <div class="vision-mission-content" data-aos="fade-right">
                    <h4 class="montserrat-bold golden-color common-head parallax-move"><?php echo get_field('about_us_page_mission_vision_section_why_us_title', $post_id); ?></h4>
                    <p class="common-para white-color parallax-move"><?php echo get_field('about_us_page_mission_vision_section_why_us_description', $post_id); ?></p>
                </div>
                <div class="vision-mission-content vision-second-content" data-aos="fade-left">
                    <h4 class="montserrat-bold golden-color common-head parallax-move"><?php echo get_field('about_us_page_vision_team_section_title', $post_id); ?></h4>
                    <p class="common-para white-color parallax-move"><?php echo get_field('about_us_page_vision_team_section_description', $post_id); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision and Mission Section end -->
<!-- Core Values section start -->
<section class="core-values-sec" id="core-values-sec">
    <div class="container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-11">
                <div class="core-values-div" data-aos="fade-up">
                    <h4 class="montserrat-bold green-color common-head text-center parallax-move"><?php echo get_field('about_us_page_core_value_section_title', $post_id); ?></h4>
                </div>
                <div class="core-values-card" data-aos="fade-up">
                    <div class="row core-values-card-first-row">
                        <div class="col-md-6 first-card">
                            <div class="row flex-center-row">
                                <div class="col-2">
                                    <div class="core-values-card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/icon1.svg" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="core-values-card-content">
                                        <h6 class="montserrat-bold green-color"><?php echo get_field('about_us_page_core_value_section_first_content_title', $post_id); ?></h6>
                                        <p><?php echo get_field('about_us_page_core_value_section_first_content_description', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 second-card">
                            <div class="row flex-center-row">
                                <div class="col-2">
                                    <div class="core-values-card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/icon2.svg" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="core-values-card-content">
                                        <h6 class="montserrat-bold green-color"><?php echo get_field('about_us_page_core_value_section_second_content_title', $post_id); ?></h6>
                                        <p><?php echo get_field('about_us_page_core_value_section_second_content_description', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row core-values-card-second-row">
                        <div class="col-md-6 second-card">
                            <div class="row flex-center-row">
                                <div class="col-2">
                                    <div class="core-values-card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/icon3.svg" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="core-values-card-content">
                                        <h6 class="montserrat-bold green-color"><?php echo get_field('about_us_page_core_value_section_third_content_title', $post_id); ?></h6>
                                        <p><?php echo get_field('about_us_page_core_value_section_third_content_description', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 first-card">
                            <div class="row flex-center-row">
                                <div class="col-2">
                                    <div class="core-values-card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/icon4.svg" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="core-values-card-content">
                                        <h6 class="montserrat-bold green-color"><?php echo get_field('about_us_page_core_value_section_fourth_content_title', $post_id); ?></h6>
                                        <p><?php echo get_field('about_us_page_core_value_section_fourth_content_description', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Core Values section end -->
<!-- Our Team Experts Section start -->
<section class="our-team-expert-sec" id="our-team-expert-sec">
    <div class="container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-8">
                <div class="who-we-are-content" data-aos="fade-up">
                    <h4 class="montserrat-bold green-color common-head parallax-move"><?php echo get_field('about_us_page_our_team_experts_section_title', $post_id); ?></h4>
                    <p class="common-para grey-color parallax-move"><?php echo get_field('about_us_page_our_team_experts_section_para_one', $post_id); ?></p>
                    <p class="common-para grey-color parallax-move"><?php echo get_field('about_us_page_our_team_experts_section_para_two', $post_id); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid our-team-swiper-container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12">
                <div class="our-team-swiper">
                    <div class="swiper ourteamSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="our-team-card">
                                    <div class="row flex-center-row">
                                        <div class="col-md-8">
                                            <div class="our-team-content">
                                                <h5 class="golden-color"><?php echo get_field('about_us_page_our_team_experts_first_swiper_title', $post_id); ?></h5>
                                                <h6 class="white-color montserrat-bold"><?php echo get_field('about_us_page_our_team_experts_first_swiper_content_title', $post_id); ?></h6>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_first_swiper_content_first_para', $post_id); ?></p>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_first_swiper_content_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="our-team-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/swiperimg-8.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-team-card">
                                    <div class="row flex-center-row">
                                        <div class="col-md-8">
                                            <div class="our-team-content">
                                                <h5 class="golden-color"><?php echo get_field('about_us_page_our_team_experts_second_swiper_title', $post_id); ?></h5>
                                                <h6 class="white-color montserrat-bold"><?php echo get_field('about_us_page_our_team_experts_second_swiper_content_title', $post_id); ?></h6>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_second_swiper_content_first_para', $post_id); ?></p>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_second_swiper_content_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="our-team-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/swiperimg-8.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-team-card">
                                    <div class="row flex-center-row">
                                        <div class="col-md-8">
                                            <div class="our-team-content">
                                                <h5 class="golden-color"><?php echo get_field('about_us_page_our_team_experts_third_swiper_title', $post_id); ?></h5>
                                                <h6 class="white-color montserrat-bold"><?php echo get_field('about_us_page_our_team_experts_third_swiper_content_title', $post_id); ?></h6>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_third_swiper_content_first_para', $post_id); ?></p>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_third_swiper_content_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="our-team-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/swiperimg-8.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-team-card">
                                    <div class="row flex-center-row">
                                        <div class="col-md-8">
                                            <div class="our-team-content">
                                                <h5 class="golden-color"><?php echo get_field('about_us_page_our_team_experts_fourth_swiper_title', $post_id); ?></h5>
                                                <h6 class="white-color montserrat-bold"><?php echo get_field('about_us_page_our_team_experts_fourth_swiper_content_title', $post_id); ?></h6>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_fourth_swiper_content_first_para', $post_id); ?></p>
                                                <p class="common-para white-color"><?php echo get_field('about_us_page_our_team_experts_fourth_swiper_content_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="our-team-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/swiperimg-8.png" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team Experts Section end -->
<!-- Become a patient section start -->
<section class="become-patient-sec" id="become-patient-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="bacome-patient-content" data-aos="fade-right">
                    <h4 class="montserrat-bold green-color common-head parallax-move"><?php echo get_field('about_us_page_becoming_patient_section_title', $post_id); ?></h4>
                    <p class="common-para grey-color parallax-move"><?php echo get_field('about_us_page_becoming_patient_section_para_one', $post_id); ?></p>
                    <p class="common-para grey-color parallax-move"><?php echo get_field('about_us_page_becoming_patient_section_para_two', $post_id); ?></p>
                    <a href="patient-network.php" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>
                </div>
            </div>
            <div class="col-md-6 padding-zero">
                <div class="bacome-patient-img" data-aos="fade-left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/side-img.jpg" class="img-fluid parallax-move" />
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Become a patient section end -->

<?php
//  include 'footer.php' 
get_footer();
?>