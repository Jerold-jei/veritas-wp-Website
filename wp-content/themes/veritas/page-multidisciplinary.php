<?php

/* Template Name: Multidisciplinary Treatment Page */

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Services us Banner Section Start -->
<section class="first-section banner-swiper-section prevention-banner">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="banner-content" data-aos="fade-right">
                    <h4 class="montserrat-bold"><?php echo get_field('multidisciplinary_treatment_banner_title', $post_id); ?></h4>
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
                        <li><?php echo get_field('multidisciplinary_treatment_banner_title', $post_id); ?></li>
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
                            <a href="<?php echo home_url('/'); ?>/prevention-screening-clinics"><?php echo get_field('prevention_screening_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/genetic-testing-counselling"><?php echo get_field('genetic_title_link', $post_id); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>/nutrition-psychological-counselling"><?php echo get_field('nutrition_title_link', $post_id); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo home_url('/'); ?>/multidisciplinary-treatment"><?php echo get_field('multidisciplinary_treatment_banner_title', $post_id); ?></a>
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
                                            <h6><?php echo get_field('multidisciplinary_side_first_swiper_title', $post_id); ?> </h6>
                                            <p><?php echo get_field('multidisciplinary_side_first_swiper_description', $post_id); ?></p>
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
                                            <h6><?php echo get_field('multidisciplinary_side_second_swiper_title', $post_id); ?> </h6>
                                            <p><?php echo get_field('multidisciplinary_side_second_swiper_description', $post_id); ?></p>
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
                                <button type="button" class="btn btn-primary dropdown-toggle form-dropdown" data-toggle="dropdown" id="selected">
                                    <?php echo get_field('multidisciplinary_treatment_banner_title', $post_id); ?>
                                </button>
                                <div class="dropdown-menu">




                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/prevention-screening-clinics">Prevention & Screening Clinics</a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/genetic-testing-counselling">Genetic Testing & Counselling </a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/nutrition-psychological-counselling">Nutrition & Psychological Counselling </a>
                                    <a class="dropdown-item" href="<?php echo home_url('/'); ?>/multidisciplinary-treatment"><?php echo get_field('multidisciplinary_treatment_banner_title', $post_id); ?></a>
                                </div>

                                <input type="hidden" name="tell_us" id="tell_us" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-contents-div" data-aos="fade-left">
                    <h5 class="montserrat-bold"><?php echo get_field('multidisciplinary_treatment_banner_title', $post_id); ?></h5>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prevention/Asset 2-100.jpg" class="img-fluid pb-4 pt-4" />

                    <p class="common-para grey-color"><?php echo get_field('multidisciplinary_section_para_one', $post_id); ?></p>

                    <p class="common-para grey-color"><?php echo get_field('multidisciplinary_section_para_two', $post_id); ?></p>

                    <p class="common-para grey-color"><?php echo get_field('multidisciplinary_section_para_three', $post_id); ?></p>


                    <p class="common-para grey-color"><?php echo get_field('multidisciplinary_section_para_four', $post_id); ?></p>

                    <p class="common-para grey-color"><?php echo get_field('multidisciplinary_healthcare_title', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_first_para_title', $post_id); ?> </span><?php echo get_field('multidisciplinary_healthcare_first_para', $post_id); ?></li>
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_second_para_title', $post_id); ?> </span><?php echo get_field('multidisciplinary_healthcare_second_para', $post_id); ?></li>
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_third_para_title', $post_id); ?> </span><?php echo get_field('multidisciplinary_healthcare_third_para', $post_id); ?></li>
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_fourth_para_title', $post_id); ?> </span> <?php echo get_field('multidisciplinary_healthcare_fourth_para', $post_id); ?></li>
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_fivth_para_title', $post_id); ?> </span> <?php echo get_field('multidisciplinary_healthcare_fivth_para', $post_id); ?></li>
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_sixth_para_title', $post_id); ?> </span> <?php echo get_field('multidisciplinary_healthcare_sixth_para', $post_id); ?></li>
                        <li><span class="golden-color"><?php echo get_field('multidisciplinary_healthcare_seventh_para_title', $post_id); ?> </span> <?php echo get_field('multidisciplinary_healthcare_seventh_para', $post_id); ?></li>
                    </ul>
                    <p class="common-para grey-color"><?php echo get_field('multidisciplinary_section_para_five', $post_id); ?></p>

                    <p class="common-para grey-color"> <?php echo get_field('multidisciplinary_section_para_six', $post_id); ?></p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Services Description section end -->

<?php
get_footer();
?>