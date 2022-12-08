<?php 

/* Template Name: Fluorescence-Guided Surgery Page */ 

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Services us Banner Section Start -->
<section class="first-section banner-swiper-section latest-procedure-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-8">
                    <div class="banner-content" data-aos="fade-right">
                        <h4 class="montserrat-bold white-color"><?php echo get_field('fluorescence_banner_title', $post_id); ?></h4> 
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
                        <li><a href="<?php echo home_url('/'); ?>/latest-procedures"><?php echo get_field('latest_procedures_title_link', $post_id); ?></a></li> 
                        <li><?php echo get_field('fluorescence_banner_title', $post_id); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row services-des-row" data-aos="fade-right">
            <div class="col-md-4">
                <!-- Services Lists -->
                <div class="services-unlist-div">
                    <ul class="squarelist">
                         <li>
                            <a href="<?php echo home_url('/'); ?>/latest-procedures"><?php echo get_field('robotic_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/hipec"><?php echo get_field('hipec_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/pipac"><?php echo get_field('pipac_title_link', $post_id); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo home_url('/'); ?>/fluorescence-guided-surgery"><?php echo get_field('fluorescence_banner_title', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/eras"><?php echo get_field('eras_title_link', $post_id); ?></a>
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
                                            <h6><?php echo get_field('fluorescence_video_first_swiper_title')?></h6>
                                            <p><?php echo get_field('fluorescence_video_first_swiper_description')?></p> 
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
                                            <h6><?php echo get_field('fluorescence_video_second_swiper_title')?></h6>
                                            <p><?php echo get_field('fluorescence_video_second_swiper_description')?></p> 
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
                            <h6 class="montserrat-bold"><?php echo get_field('blog_swiper_title')?></h6>
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
                                                        <h5><?php echo get_field('blog_first_swiper_title')?></h5>
                                                        <p><?php echo get_field('blog_first_swiper_description')?> </p>
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
                                                        <h5><?php echo get_field('blog_second_swiper_title')?></h5>
                                                        <p><?php echo get_field('blog_second_swiper_description')?></p> 
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
                                    <?php echo get_field('fluorescence_banner_title', $post_id); ?>
                                </button>
                                <div class="dropdown-menu">




                                 <a class="dropdown-item" href="<?php echo home_url('/'); ?>/latest-procedures"><?php echo get_field('robotic_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/hipec"><?php echo get_field('hipec_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/pipac"><?php echo get_field('pipac_title_link', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/fluorescence-guided-surgery"><?php echo get_field('fluorescence_banner_title', $post_id); ?></a>
                                <a class="dropdown-item" href="<?php echo home_url('/'); ?>/eras"><?php echo get_field('eras_title_link', $post_id); ?></a> 
                                </div>

                                <input type="hidden" name="tell_us" id="tell_us" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-contents-div">
                    <h5 class="montserrat-bold" data-aos="fade-left"><?php echo get_field('fluorescence_banner_title', $post_id); ?></h5>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/latest-procedure/Asset 2-100.jpg" class="img-fluid pb-4 pt-4" data-aos="fade-left" />

                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_section_para_one', $post_id); ?></p> 
                    
                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_section_para_two', $post_id); ?></p> 
                    
                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_section_para_three', $post_id); ?></p> 
                    
                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_list_title', $post_id); ?></p>                                     
                        <ul class="small-circle-bullet" data-aos="fade-left">
                                                <li><?php echo get_field('fluorescence_list_one', $post_id); ?></li>
                                                <li><?php echo get_field('fluorescence_list_two', $post_id); ?></li>
                                                <li><?php echo get_field('fluorescence_list_three', $post_id); ?></li>
                                                <li><?php echo get_field('fluorescence_list_four', $post_id); ?></li>
                                                <li><?php echo get_field('fluorescence_list_five', $post_id); ?></li>
                        </ul> 
                    
                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_section_para_four', $post_id); ?></p>  
                    
                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_section_para_five', $post_id); ?></p>  
                    
                    <p class="common-para grey-color" data-aos="fade-left"><?php echo get_field('fluorescence_section_para_six', $post_id); ?></p>  
                    
                </div>
<!--                <div class="services-accordion-div">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
                            <!-- Accordion -->
<!--                            <div id="accordionExample" class="accordion">-->
<!--                                <div class="card">-->
<!--                                    <div id="headingTwo" class="card-header">-->
<!--                                        <h6 class="montserrat-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="d-block position-relative collapsed  collapsible-link ">How it works:-->
<!--</a></h6>-->
<!--                                    </div>-->
<!--                                    <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show">-->
<!--                                        <div class="card-body">-->
                                            
<!--                                            <ul class="small-circle-bullet">-->
<!--                                                <li><span class="golden-color">Pre Admission Phase -</span> The patient is initially assessed by their healthcare team, who evaluate their medical condition, -->
<!--                                                set individual goals and formulate a specialised diet. Patients are also advised to do their own research via reading research papers or watching informational -->
<!--                                                videos before starting the procedure.</li>-->

<!--                                                <li><span class="golden-color">Pre Operative Phase -</span> Patients are allowed to consume food two hours before the surgery as opposed to stopping one day -->
<!--                                                before the procedure as with regular surgeries.</li>-->
                                                
<!--                                                <li> <span class="golden-color">Intra Operative Phase -</span> Medication and anaesthesia are customised as per the patient’s needs while taking effective care to minimise -->
<!--                                                the amount of medication used so as to achieve pain control post-surgery.</li> -->
                                                
<!--                                                <li> <span class="golden-color">Post Operative Phase -</span> This includes encouraging the patient to resume everyday activities much earlier than regular surgeries, -->
<!--                                                such as walking early, start eating earlier and controlling the use of pain medication.</li> -->
                                                
<!--                                                <li> <span class="golden-color">Post Discharge Phase -</span> This includes monitoring the patient’s health and noting any changes to seek assistance, keeping up with -->
<!--                                                the medication schedule and slowly returning to their routine.</li> -->
<!--                                            </ul>-->
<!--                                            <p class="common-para grey-color">ERAS has been widely facilitated in cardiac surgery, head and neck surgery, thoracic surgery, gastrointestinal surgery, gynaecologic surgery and general surgery.</p>-->
                                            
<!--                                            <p class="common-para grey-color">Veritas Cancer Care works tirelessly in preparing patients for major surgeries to ensure their recovery is smooth and without complications. -->
<!--                                            The oncological team at Veritas Cancer Care is headed by Dr Venkat P, a highly-trained surgical oncologist and robotic surgeon. With over 22 years of experience, he has managed around 25,000 oncological cases and performed over 20,000 surgeries. -->
<!--                                            He is one of the few surgeons who strictly follows the international ERAS guidelines to ensure the early recovery of his patients with lesser complications.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div> -->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                      
<!--                </div>-->
            </div>
        </div>
    </div>
</section>

<!-- Services Description section end -->


<?php
get_footer();
?>