<?php

/* Template Name: Prevention And Screening Clinics Page */ 

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>
<!-- Services us Banner Section Start -->
<section class="first-section banner-swiper-section prevention-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="banner-content" data-aos="fade-right">
                        <h4 class="montserrat-bold"><?php echo get_field('prevention_banner_title', $post_id); ?></h4> 
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
                        <li><a href="<?php echo home_url('/'); ?>/prevention-screening-clinics"><?php echo get_field('prevention_title_link', $post_id); ?></a></li> 
                        <li><?php echo get_field('prevention_section_title', $post_id); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row services-des-row">
            <div class="col-md-4">
                <!-- Services Lists -->
                <div class="services-unlist-div">
                    <ul class="squarelist" data-aos="fade-right">
                        <li class="active">
                            <a href="<?php echo home_url('/'); ?>/prevention-screening-clinics"><?php echo get_field('prevention_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/genetic-testing-counselling"><?php echo get_field('genetic_testing_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/nutrition-psychological-counselling"><?php echo get_field('nutrition_psychological_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/multidisciplinary-treatment"><?php echo get_field('multidisciplinary_treatment_title_link', $post_id); ?></a>
                        </li> 
                    </ul>
                </div>
                <!-- Services Videos -->
                <div class="service-video-div" data-aos="fade-right">
                    <div class="service-video-head row">
                        <div class="col-md-12">
                            <h6 class="montserrat-bold"><?php echo get_theme_mod('header_text_field')?></h6>
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
                                            <h6><?php echo get_field('prevention_page_side_first_swiper_title', $post_id); ?></h6>
                                            <p><?php echo get_field('prevention_page_side_first_swiper_description', $post_id); ?></p> 
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
                                            <h6><?php echo get_field('prevention_page_side_second_swiper_title', $post_id); ?></h6>
                                            <p><?php echo get_field('prevention_page_side_second_swiper_description', $post_id); ?></p> 
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
                <!-- <div class="service-video-div" data-aos="fade-right">
                    <div class="service-video-head row">
                        <div class="col-md-12">
                            <h6 class="montserrat-bold">Blogs</h6>
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
                                                    <img src="./img/services/Asset 4-100.jpg" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="service-video-swiper-content">
                                                    <a href="blog.php">
                                                        <h5>Colorectal Cancer And their Treatment </h5>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse obcaecati quasi, earum autem quae similique voluptas eveniet nisi atque praesentium recusandae ratione quaerat consectetur culpa est. Doloremque exercitationem quas reiciendis. </p>
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
                                                    <img src="./img/services/Asset 4-100.jpg" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="service-video-swiper-content">
                                                    <a href="blog.php">
                                                        <h5>Colorectal Cancer And their Treatment </h5>
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero laudantium illum, blanditiis dolorum commodi, repellat modi fugit, totam voluptatum eaque facere minus numquam esse pariatur vero non reprehenderit quidem dolores!</p> 
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
                </div> -->
                <!-- Services Length Image -->
                <!--<div class="services-length-img-div" data-aos="fade-up">-->
                <!--    <div class="services-length-img">-->
                <!--        <img src="./img/prevention/Asset 4-100.jpg" class="img-fluid" />-->
                <!--        <div class="services-length-content">-->
                <!--            <h4 class="montserrat-bold white-border-text">Lorem ipsum dolor  </h4>-->
                <!--            <p class="white-color">All new and advanced ai technology for cancer Treatment</p>-->
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
                                    <?php echo get_field('prevention_title_link', $post_id); ?>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/prevention-screening-clinics"><?php echo get_field('prevention_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/genetic-testing-counselling"><?php echo get_field('genetic_testing_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/nutrition-psychological-counselling"><?php echo get_field('nutrition_psychological_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/multidisciplinary-treatment"><?php echo get_field('multidisciplinary_treatment_title_link', $post_id); ?></a> 
                                </div>

                                <input type="hidden" name="tell_us" id="tell_us" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-contents-div" data-aos="fade-left">
                    <h5 class="montserrat-bold"><?php echo get_field('prevention_section_title', $post_id); ?></h5>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prevention/Asset 2-100.jpg" class="img-fluid pb-4 pt-4" />
                    <p class="common-para grey-color"><?php echo get_field('prevention_section_description_first_para', $post_id); ?></p> 
                    <p class="common-para grey-color"><?php echo get_field('prevention_section_description_second_para', $post_id); ?></p>
                        
                        <div class="caution-text-div">
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_one', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_one', $post_id); ?></p>
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_two', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_two', $post_id); ?></p>
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_three', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_three', $post_id); ?></p>
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_four', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_four', $post_id); ?></p>
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_five', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_five', $post_id); ?></p>
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_six', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_six', $post_id); ?></p>
                            <p class="common-para grey-color"><span class="golden-color"><?php echo get_field('prevention_section_description_span_seven', $post_id); ?></span>  <?php echo get_field('prevention_section_description_span_para_seven', $post_id); ?></p>
                        </div>

                        <p class="common-para grey-color"><?php echo get_field('prevention_section_description_third_para', $post_id); ?></p>
                </div>
                
                <div class="services-accordion-div" data-aos="fade-left">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Accordion -->
                            <div id="accordionExample" class="accordion">
 
                                <div class="card">
                                    <div id="headingOne" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative  collapsible-link "><?php echo get_field('prevention_modifiable_risk_factors_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <p class="common-para grey-color"><?php echo get_field('prevention_modifiable_risk_factors_description', $post_id); ?> </p>
                                            <div class="plus-icon-points">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_modifiable_tobacco_use_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_tobacco_use_para_one', $post_id); ?></p>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_tobacco_use_para_two', $post_id); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_modifiable_obesity_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_obesity_para_one', $post_id); ?></p>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_obesity_para_two', $post_id); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_modifiable_protect_yourself_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_protect_yourself_para', $post_id); ?></p>
                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_modifiable_limit_alcohol_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_limit_alcohol_para', $post_id); ?></p>
                                             
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_modifiable_avoid_exposure_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_modifiable_avoid_exposure_para', $post_id); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
 
                                        </div>
                                    </div>
                                </div>
 
                                <div class="card">
                                    <div id="headingTwo" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('prevention_non_modifiable_risk_factors_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                                <p class="common-para grey-color"><?php echo get_field('prevention_non_modifiable_risk_factors_description', $post_id); ?></p> 
                                        </div>
                                    </div>
                                </div>
 
                                <div class="card">
                                    <div id="headingThree" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="d-block position-relative collapsed  collapsible-link "><?php echo get_field('prevention_screening_clinics_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <p class="common-para grey-color"><?php echo get_field('prevention_screening_clinics_description', $post_id); ?></p>
 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div id="headingFour" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="d-block position-relative  collapsible-link "><?php echo get_field('prevention_cancer_screening_title', $post_id); ?></a></h6>
                                    </div>
                                    <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <p class="common-para grey-color"><?php echo get_field('prevention_cancer_screening_description_one', $post_id); ?></p>
                                            <div class="plus-icon-points">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_breast_cancer_screening_title', $post_id); ?></h6>
                                                            
                                                            <ul class="circle-list">
                                                              <li><b><?php echo get_field('prevention_breast_cancer_screening_first_para_title', $post_id); ?> </b> <?php echo get_field('prevention_breast_cancer_screening_first_para', $post_id); ?></li> 
                                                              
                                                              <li><b><?php echo get_field('prevention_breast_cancer_screening_second_para_title', $post_id); ?></b> <?php echo get_field('prevention_breast_cancer_screening_second_para', $post_id); ?></li>
                                                              
                                                              <li><b><?php echo get_field('prevention_breast_cancer_screening_third_para_title', $post_id); ?></b> <?php echo get_field('prevention_breast_cancer_screening_third_para', $post_id); ?></li>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_head_neck_cancer_screening_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_head_neck_cancer_screening_description', $post_id); ?></p>
                                                            <!--<p class="grey-color">Frequent exercise combined with a balanced diet can help reduce obesity and thus reduce the risk of being exposed to cancer.</p>-->
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_colorectal_cancer_screening_title', $post_id); ?></h6>
                                                            
                                                            <ul class="circle-list">
                                                              <li><b><?php echo get_field('prevention_colorectal_cancer_screening_first_para_title', $post_id); ?></b> <?php echo get_field('prevention_colorectal_cancer_screening_first_para', $post_id); ?></li> 
                                                              
                                                              <li><b><?php echo get_field('prevention_colorectal_cancer_screening_second_para_title', $post_id); ?> </b> <?php echo get_field('prevention_colorectal_cancer_screening_second_para', $post_id); ?></li>
                                                              
                                                              <li><b><?php echo get_field('prevention_colorectal_cancer_screening_third_para_title', $post_id); ?> </b> <?php echo get_field('prevention_colorectal_cancer_screening_third_para', $post_id); ?></li>
                                                              
                                                              <li><b><?php echo get_field('prevention_colorectal_cancer_screening_fourth_para_title', $post_id); ?> </b> <?php echo get_field('prevention_colorectal_cancer_screening_fourth_para', $post_id); ?></li>
                                                              
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_lung_cancer_screening_title', $post_id); ?> </h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_lung_cancer_screening_description', $post_id); ?></p>
                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_liver_cancer_screening_title', $post_id); ?></h6>
                                                            <p class="grey-color"><?php echo get_field('prevention_liver_cancer_screening_description', $post_id); ?></p>
                                             
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_stomach_cancer_screening_title', $post_id); ?></h6>
                                                            <p class="grey-color"><b><?php echo get_field('prevention_stomach_cancer_screening_first_para_title', $post_id); ?></b> <?php echo get_field('prevention_stomach_cancer_screening_first_para', $post_id); ?></p>
                                                            
                                                            <p class="grey-color"><?php echo get_field('prevention_stomach_cancer_screening_second_para', $post_id); ?></p>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="col-md-6">
                                                        <div class="plus-icon-points-div">
                                                            <h6 class="montserrat-bold golden-color"><?php echo get_field('prevention_cervical_cancer_screening_title', $post_id); ?></h6>
                                                            
                                                            <p class="grey-color"><?php echo get_field('prevention_cervical_cancer_screening_description', $post_id); ?></p>
                                                            
                                                            <ul class="circle-list">
                                                              <li><b><?php echo get_field('prevention_cervical_cancer_screening_first_para_title', $post_id); ?> </b> <?php echo get_field('prevention_cervical_cancer_screening_first_para', $post_id); ?></li> 
                                                              
                                                              <li><b><?php echo get_field('prevention_cervical_cancer_screening_second_para_title', $post_id); ?> </b> <?php echo get_field('prevention_cervical_cancer_screening_second_para', $post_id); ?></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                              <p class="grey-color"><?php echo get_field('prevention_cancer_screening_description_two', $post_id); ?></p>
                                                            
                                              <p class="grey-color"><?php echo get_field('prevention_cancer_screening_description_three', $post_id); ?></p>
 
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="card">
                                    <div id="headingFour" class="card-header">
                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="d-block position-relative collapsed  collapsible-link ">Cancer Screening</a></h6>
                                    </div>
                                    <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse show">
                                        <div class="card-body">
                                            <p class="common-para grey-color">Women ages 40 - 44 are encouraged to get annual mammograms to check for breast
                                            cancer. People with a family history of cancer are also advised to take the relevant
                                            screening tests as a precaution. Our clinic offers tests for anyone who wishes to get themselves screened for cancer. Make an appointment with us now and get tested sooner
                                            rather than later.</p>
 
                                        </div>
                                    </div>
                                </div> -->

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