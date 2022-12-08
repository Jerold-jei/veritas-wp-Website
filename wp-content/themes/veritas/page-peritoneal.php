<?php

/* Template Name: Peritoneal Surface Malignancies Page */

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>
<!-- Services us Banner Section Start -->
<section class="first-section banner-swiper-section peritoneal-banner">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="banner-content" data-aos="fade-right">
                    <h4 class="montserrat-bold"><?php echo get_field('peritoneal_banner_title', $post_id); ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services us Banner Section End -->

<!-- Services Description section -->
<section class="services-des-sec">
    <div class="container-fluid services-des-container wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-div" data-aos="fade-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><?php echo get_field('services_title_link', $post_id); ?></a></li>
                        <li><?php echo get_field('peritoneal_banner_title', $post_id); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row services-des-row">
            <div class="col-md-4">
                <!-- Services Lists -->
                <div class="services-unlist-div">
                    <ul class="squarelist" data-aos="fade-right">
                        <li>
                            <a href="<?php echo home_url('/'); ?>/colorectal"><?php echo get_field('colorectal_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/upper-gastrointestinal-malignancies"><?php echo get_field('gastrointestinal_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/gynecological-malignancies"><?php echo get_field('gynecological_title_link', $post_id); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo home_url('/'); ?>/peritoneal"><?php echo get_field('peritoneal_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/hepatobiliary"><?php echo get_field('hepatobiliary_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/breast"><?php echo get_field('breast_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/head-and-neck"><?php echo get_field('head_and_neck_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/thorax"><?php echo get_field('thorax_title_link', $post_id); ?></a>
                        </li>
                    </ul>
                </div>
                <!-- Services Videos -->
                <div class="service-video-div" data-aos="fade-right">
                    <div class="service-video-head row">
                        <div class="col-md-12">
                            <h6 class="montserrat-bold"><?php echo get_theme_mod('header_text_field') ?></h6>
                        </div>
                    </div>
                    <div class="service-video-swiper">
                        <div class="swiper storiesVideoSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-video-swiper-div">
                                        <div class="service-video-swiper-img">
                                            <a href="<?php echo get_theme_mod('youtube_first_video_link') ?>" data-fancybox="gallery" data-caption="Vanakkam Tamizha with Cancer Specialist Dr. Venkat">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/Asset 2-100.jpg" class="img-fluid" />

                                                <!-- <img src="./img/services/Asset 2-100.jpg" class="img-fluid" /> -->
                                                <div class="video-icon">
                                                    <div class="video-fa-icon">
                                                        <i class="fa fa-play"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="service-video-swiper-content">
                                            <h6><?php echo get_field('peritoneal_video_first_swiper_title', $post_id); ?></h6>
                                            <p><?php echo get_field('peritoneal_video_first_swiper_description', $post_id); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-video-swiper-div">
                                        <div class="service-video-swiper-img">
                                            <a href="<?php echo get_theme_mod('youtube_first_video_link') ?>" data-fancybox="gallery" data-caption="Vanakkam Tamizha with Cancer Specialist Dr. Venkat">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/Asset 3-100.jpg" class="img-fluid" />
                                                <div class="video-icon">
                                                    <div class="video-fa-icon">
                                                        <i class="fa fa-play"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="service-video-swiper-content">
                                            <h6><?php echo get_field('peritoneal_video_second_swiper_title', $post_id); ?></h6>
                                            <p><?php echo get_field('peritoneal_video_second_swiper_description', $post_id); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                    </div>
                </div>
                <!-- Services Blogs Swiper -->
                <div class="service-video-div" data-aos="fade-right">
                    <div class="service-video-head row">
                        <div class="col-md-12">
                            <h6 class="montserrat-bold"><?php echo get_field('blog_swiper_title', $post_id); ?></h6>
                        </div>
                    </div>
                    <div class="service-video-swiper">
                        <div class="swiper storiesVideoSwiper storiesBlogSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-video-swiper-div">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="service-video-swiper-img">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/Asset 4-100.jpg" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="service-video-swiper-content">
                                                    <a href="<?php echo home_url('/'); ?>/blog">
                                                        <h5><?php echo get_field('blog_first_swiper_title', $post_id); ?></h5>
                                                        <p><?php echo get_field('blog_first_swiper_description', $post_id); ?></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-video-swiper-div">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="service-video-swiper-img">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/Asset 4-100.jpg" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="service-video-swiper-content">
                                                    <a href="<?php echo home_url('/'); ?>/blog">
                                                        <h5><?php echo get_field('blog_second_swiper_title', $post_id); ?></h5>
                                                        <p><?php echo get_field('blog_second_swiper_description', $post_id); ?></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                    </div>
                </div>
                <!-- Services Length Image -->
                <!--<div class="services-length-img-div" data-aos="fade-right">-->
                <!--    <div class="services-length-img">-->
                <!--        <img src="./img/services/Asset 7-100.jpg" class="img-fluid" />-->
                <!--        <div class="services-length-content">-->
                <!--            <h4 class="montserrat-bold">Advanced Treatment For Cancer</h4>-->
                <!--            <p class="grey-color">All new and advanced ai technology for cancer Treatment</p>-->

                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="col-md-8">
                <div class="col-md-12 get-in-touch-form service-page-dropdown">
                    <div class="form-group">
                        <!-- <label for="gender" class="green-color montserrat-bold">What is your type of cancer?</label>  -->
                        <div class="form-group">
                            <div class="dropdown" id="tell_us_drop_down">
                                <button type="button" class="btn btn-primary dropdown-toggle form-dropdown" data-toggle="dropdown" id="selected">
                                    <?php echo get_field('peritoneal_title_link', $post_id); ?>
                                </button>
                                <div class="dropdown-menu">

                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/colorectal"><?php echo get_field('colorectal_title_link', $post_id); ?></a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/upper-gastrointestinal-malignancies"><?php echo get_field('gastrointestinal_title_link', $post_id); ?></a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/gynecological-malignancies"><?php echo get_field('gynecological_title_link', $post_id); ?></a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/peritoneal"><?php echo get_field('peritoneal_title_link', $post_id); ?></a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/hepatobiliary"><?php echo get_field('hepatobiliary_title_link', $post_id); ?></a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/breast"> <?php echo get_field('breast_title_link', $post_id); ?> </a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/head-and-neck"> <?php echo get_field('head_and_neck_title_link', $post_id); ?> </a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/thorax"> <?php echo get_field('thorax_title_link', $post_id); ?> </a>
                                </div>

                                <input type="hidden" name="tell_us" id="tell_us" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-contents-div" data-aos="fade-left">
                    <h5 class="montserrat-bold"><?php echo get_field('peritoneal_banner_title', $post_id); ?></h5>
                    <p class="common-para grey-color"><?php echo get_field('peritoneal_section_description', $post_id); ?></p>
                    <h6 class="montserrat-bold"><?php echo get_field('peritoneal_causes_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('peritoneal_causes_description', $post_id); ?></p>
                    <h6 class="montserrat-bold"><?php echo get_field('peritoneal_types_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('peritoneal_type_para_one', $post_id); ?> </p>
                    <ul class="small-circle-bullet">
                        <li><?php echo get_field('peritoneal_type_para_two', $post_id); ?></li>
                        <li><?php echo get_field('peritoneal_type_para_three', $post_id); ?></li>

                    </ul>
                </div>
                <div class="services-accordion-div" data-aos="fade-left">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Accordion -->
                            <div id="accordionExample" class="accordion">

                                <div class="card">
                                    <div id="headingOne" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative  collapsible-link "><?php echo get_field('peritoneal_symptom_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <p class="common-para grey-color"><?php echo get_field('peritoneal_symptom_description', $post_id); ?></p>
                                            <div class="services-accor-icons-div row">
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon1.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_one', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon2.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_two', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon3.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_three', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon4.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_four', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon5.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_five', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon6.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_six', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon6.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_seven', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon6.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_eight', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon6.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_nine', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="services-accor-icons text-center">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-icon6.svg" class="img-fluid" />
                                                        <p class="golden-color"><?php echo get_field('peritoneal_symptom_ten', $post_id); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div id="headingTwo" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('peritoneal_diagnosis_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <p class="common-para grey-color"><?php echo get_field('peritoneal_diagnosis_description', $post_id); ?></p>


                                            <div class="services-nav-tabs-div row">
                                                <div class="col-md-12">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav services-nav-tabs nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#menu1"><span><?php echo get_field('peritoneal_diagnosis_biopsy_title', $post_id); ?></span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#menu2"><span><?php echo get_field('peritoneal_diagnosis_paracentesis_title', $post_id); ?></span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#menu3"><span><?php echo get_field('peritoneal_diagnosis_diagnostic_imaging_title', $post_id); ?></span> </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#menu4"><span><?php echo get_field('peritoneal_diagnosis_lower_gi_title', $post_id); ?></span> </a>
                                                        </li>
                                                    </ul>

                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div id="menu1" class="container tab-pane active">
                                                            <div class="services-tabs-content-card">
                                                                <div class="tabs-content-img">
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/colorectal/Biopsy.jpg" class="img-fluid" />
                                                                </div>
                                                                <div class="tabs-content-text">
                                                                    <h5 class="montserrat-bold"><?php echo get_field('peritoneal_diagnosis_biopsy_title', $post_id); ?></h5>
                                                                    <p class="common-para grey-color"><?php echo get_field('peritoneal_diagnosis_biopsy_description', $post_id); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="menu2" class="container tab-pane fade">
                                                            <div class="services-tabs-content-card">
                                                                <div class="tabs-content-img">
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/service-imgs-100.jpg" class="img-fluid" />
                                                                </div>
                                                                <div class="tabs-content-text">
                                                                    <h5 class="montserrat-bold"><?php echo get_field('peritoneal_diagnosis_paracentesis_title', $post_id); ?></h5>
                                                                    <p class="common-para grey-color"><?php echo get_field('peritoneal_diagnosis_paracentesis_description', $post_id); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="menu3" class="container tab-pane fade">
                                                            <div class="services-tabs-content-card">
                                                                <div class="tabs-content-img">
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/colorectal/Diagnostic imaging.jpg" class="img-fluid" />
                                                                </div>
                                                                <div class="tabs-content-text">
                                                                    <h5 class="montserrat-bold"><?php echo get_field('peritoneal_diagnosis_diagnostic_imaging_title', $post_id); ?></h5>
                                                                    <p class="common-para grey-color"><?php echo get_field('peritoneal_diagnosis_diagnostic_imaging_para_one', $post_id); ?>
                                                                    </p>
                                                                    <ul class="small-circle-bullet">
                                                                        <li><?php echo get_field('peritoneal_diagnosis_diagnostic_imaging_para_two', $post_id); ?>
                                                                        </li>
                                                                        <li><?php echo get_field('peritoneal_diagnosis_diagnostic_imaging_para_three', $post_id); ?>
                                                                        </li>
                                                                        <li><?php echo get_field('peritoneal_diagnosis_diagnostic_imaging_para_four', $post_id); ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="menu4" class="container tab-pane fade">
                                                            <div class="services-tabs-content-card">
                                                                <div class="tabs-content-img">
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/colorectal/LFT.jpg" class="img-fluid" />
                                                                </div>
                                                                <div class="tabs-content-text">
                                                                    <h5 class="montserrat-bold"><?php echo get_field('peritoneal_diagnosis_lower_gi_title', $post_id); ?></h5>
                                                                    <p class="common-para grey-color"> <?php echo get_field('peritoneal_diagnosis_lower_gi_para_one', $post_id); ?></p>
                                                                    <p class="common-para grey-color"><?php echo get_field('peritoneal_diagnosis_lower_gi_para_two', $post_id); ?></p>
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

                            <div class="card">
                                <div id="headingThree" class="card-header">
                                    <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('peritoneal_treatment_title', $post_id); ?></a></h6>
                                </div>
                                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse show">
                                    <div class="card-body">
                                        <p class="common-para grey-color"><?php echo get_field('peritoneal_treatment_para_one', $post_id); ?>
                                        </p>

                                        <div class="plus-icon-points">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="plus-icon-points-div">
                                                        <h6 class="montserrat-bold golden-color"><?php echo get_field('peritoneal_treatment_surgery_title', $post_id); ?></h6>
                                                        <p class="grey-color"><?php echo get_field('peritoneal_treatment_surgery_description', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="plus-icon-points-div">
                                                        <h6 class="montserrat-bold golden-color"><?php echo get_field('peritoneal_treatment_intraperitoneal_chemotherapy_title', $post_id); ?></h6>
                                                        <p class="grey-color"><?php echo get_field('peritoneal_treatment_intraperitoneal_chemotherapy_description', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="plus-icon-points-div">
                                                        <h6 class="montserrat-bold golden-color"><?php echo get_field('peritoneal_treatment_hipec_title', $post_id); ?> </h6>
                                                        <p class="grey-color"><?php echo get_field('peritoneal_treatment_hipec_description', $post_id); ?></p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="plus-icon-points-div">
                                                        <h6 class="montserrat-bold golden-color"><?php echo get_field('peritoneal_treatment_pipac_title', $post_id); ?>  </h6>
                                                        <p class="grey-color"> <?php echo get_field('peritoneal_treatment_pipac_description', $post_id); ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <p class="common-para grey-color"><?php echo get_field('peritoneal_treatment_para_two', $post_id); ?></p>
                                        <p class="common-para grey-color"><?php echo get_field('peritoneal_treatment_para_three', $post_id); ?></p>
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
</section>

<!-- Services Description section end -->
<?php
get_footer();
?>