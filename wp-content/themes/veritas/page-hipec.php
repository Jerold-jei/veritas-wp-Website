<?php

/* Template Name: Hipec Page */

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Services us Banner Section Start -->
<section class="first-section banner-swiper-section latest-procedure-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="banner-content" data-aos="fade-right">
                        <h4 class="montserrat-bold white-color"><?php echo get_field('hipec_banner_title', $post_id); ?></h4> 
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
                <div class="breadcrumb-div">
                    <ul class="breadcrumb" data-aos="fade-right">
                        <li><a href="<?php echo home_url('/'); ?>/latest-procedures"><?php echo get_field('latest_procedure_title_link', $post_id); ?></a></li> 
                        <li><?php echo get_field('hipec_banner_title', $post_id); ?></li>
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
                            <a href="<?php echo home_url('/'); ?>/latest-procedures"><?php echo get_field('robotic_title_link', $post_id); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo home_url('/'); ?>/hipec"><?php echo get_field('hipec_banner_title', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/pipac"><?php echo get_field('pipac_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/fluorescence-guided-surgery"><?php echo get_field('fluorescence_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/eras"><?php echo get_field('ers_title_link', $post_id); ?></a>
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
                                            <a href="<?php echo get_theme_mod('youtube_first_video_link')?>" data-fancybox="gallery" data-caption="Vanakkam Tamizha with Cancer Specialist Dr. Venkat">
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
                                            <h6><?php echo get_field('hipec_side_first_swiper_title', $post_id); ?></h6>
                                            <p><?php echo get_field('hipec_side_first_swiper_description', $post_id); ?></p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-video-swiper-div">
                                        <div class="service-video-swiper-img">
                                            <a href="<?php echo get_theme_mod('youtube_first_video_link')?>" data-fancybox="gallery" data-caption="Vanakkam Tamizha with Cancer Specialist Dr. Venkat">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/Asset 3-100.jpg" class="img-fluid" />
                                                <div class="video-icon">
                                                    <div class="video-fa-icon">
                                                        <i class="fa fa-play"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="service-video-swiper-content">
                                            <h6><?php echo get_field('hipec_side_second_swiper_title', $post_id); ?></h6>
                                            <p><?php echo get_field('hipec_side_second_swiper_description', $post_id); ?></p> 
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
                            <h6 class="montserrat-bold"><?php echo get_field('hipec_blog_title', $post_id); ?></h6>
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
                                                        <h5><?php echo get_field('hipec_blog_first_swiper_title', $post_id); ?></h5>
                                                        <p><?php echo get_field('hipec_blog_first_swiper_description', $post_id); ?></p>
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
                                                        <h5><?php echo get_field('hipec_blog_second_swiper_title', $post_id); ?></h5>
                                                        <p><?php echo get_field('hipec_blog_second_swiper_description', $post_id); ?></p> 
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
                <!--<div class="services-length-img-div" data-aos="fade-up">-->
                <!--    <div class="services-length-img">-->
                <!--        <img src="./img/latest-procedure/length-img.jpg" class="img-fluid" />-->
                <!--        <div class="services-length-content">-->
                <!--            <h4 class="montserrat-bold">Lorem ipsum dolor  </h4>-->
                <!--            <p class="grey-color">All new and advanced ai technology for cancer Treatment</p>-->
                <!--            <div class="text-right">-->
                <!--                <a href="#" class="veritas-btn">Read More <i class="fa fa-angle-right"></i> </a>-->
                <!--            </div>-->
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
                                <button type="button" class="btn btn-primary dropdown-toggle form-dropdown"
                                    data-toggle="dropdown" id="selected">
                                    <?php echo get_field('hipec_banner_title', $post_id); ?>
                                </button>
                                <div class="dropdown-menu">

                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/latest-procedures"><?php echo get_field('robotic_title_link', $post_id); ?> </a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/hipec"><?php echo get_field('hipec_banner_title', $post_id); ?> </a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/pipac"><?php echo get_field('pipac_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/fluorescence-guided-surgery"><?php echo get_field('fluorescence_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/eras"><?php echo get_field('ers_title_link', $post_id); ?></a> 
                                </div>

                                <input type="hidden" name="tell_us" id="tell_us" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-contents-div" data-aos="fade-left">
                    <h5 class="montserrat-bold"><?php echo get_field('hipec_banner_title', $post_id); ?></h5>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/latest-procedure/Asset 2-100.jpg" class="img-fluid pb-4 pt-4" />
                    
                    <h6 class="montserrat-bold"><?php echo get_field('hipec_cytoreductive_surgery_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('hipec_cytoreductive_surgery_para_one', $post_id); ?> </p>  
                    <p class="common-para grey-color"><?php echo get_field('hipec_cytoreductive_surgery_para_two', $post_id); ?></p>
                  
                </div>
                <div class="services-accordion-div" data-aos="fade-left">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Accordion -->
                            <div id="accordionExample" class="accordion">
                                <div class="card">
                                    <div id="headingTwo" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('hipec_surgery_treated_cancer_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <ul class="small-circle-bullet">
                                                <li><?php echo get_field('hipec_surgery_treated_cancer_type_one', $post_id); ?></li>
                                                <li><?php echo get_field('hipec_surgery_treated_cancer_type_two', $post_id); ?></li>
                                                <li><?php echo get_field('hipec_surgery_treated_cancer_type_three', $post_id); ?></li> 
                                                 <li><?php echo get_field('hipec_surgery_treated_cancer_type_four', $post_id); ?></li> 
                                                  <li><?php echo get_field('hipec_surgery_treated_cancer_type_five', $post_id); ?></li> 
                                                   <li><?php echo get_field('hipec_surgery_treated_cancer_type_six', $post_id); ?></li> 
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div id="headingOne" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative  collapsible-link "><?php echo get_field('hipec_surgery_steps_involved_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                             
                                            
                                            <p class="common-para grey-color"><?php echo get_field('hipec_surgery_steps_involved_para_one', $post_id); ?></p>
                                            <p class="common-para grey-color"><?php echo get_field('hipec_surgery_steps_involved_para_two', $post_id); ?></p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="headingThree" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('hipec_surgery_advantages_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <ul class="small-circle-bullet">
                                                <li><?php echo get_field('hipec_surgery_advantages_list_one', $post_id); ?></li>
                                                <li><?php echo get_field('hipec_surgery_advantages_list_two', $post_id); ?> </li>
                                                <li><?php echo get_field('hipec_surgery_advantages_list_three', $post_id); ?></li> 
                                                 <li><?php echo get_field('hipec_surgery_advantages_list_four', $post_id); ?></li>  
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                               <div class="card">
                                    <div id="headingFour" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('expect_after_hipec_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <ul class="small-circle-bullet">
                                                <li><?php echo get_field('expect_after_hipec_list_one', $post_id); ?></li>
                                                <li><?php echo get_field('expect_after_hipec_list_two', $post_id); ?></li>
                                                <li><?php echo get_field('expect_after_hipec_list_three', $post_id); ?></li> 
                                                 <li><?php echo get_field('expect_after_hipec_list_four', $post_id); ?></li>  
                                            </ul>
                                             <p class="common-para grey-color"><?php echo get_field('expect_after_hipec_para_one', $post_id); ?></p>
                                         <p class="common-para grey-color"><?php echo get_field('expect_after_hipec_para_two', $post_id); ?></p>
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