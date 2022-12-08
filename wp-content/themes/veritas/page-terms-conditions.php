<?php

/* Template Name: Terms and Conditions Page */

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Terms Banner Section Start -->
<section class="first-section banner-swiper-section latest-procedure-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-content" data-aos="fade-right">
                        <h4 class="montserrat-bold white-color"><?php echo get_field('terms_and_conditions_banner_title', $post_id); ?></h4> 
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- Terms Banner Section End -->

<!-- Terms Description section -->
<section class="terms-des-sec">
    <div class="container-fluid terms-des-container wrapper">
     
        <div class="row terms-des-row">
            
            <div class="col-md-12">
                <div class="terms-contents-div">
                    <h5 class="montserrat-bold"><?php echo get_field('terms_and_conditions_welcome_title', $post_id); ?></h5> 
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_welcome_para_one', $post_id); ?> <a href="<?php echo home_url('/'); ?>"><?php echo get_field('terms_and_conditions_welcome_website_link', $post_id); ?></a></p>  
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_welcome_para_two', $post_id); ?></p>  
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_welcome_para_three', $post_id); ?></p>
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_cookies_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_cookies_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_cookies_para_two', $post_id); ?></p>

                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_license_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_license_description', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_list_title', $post_id); ?></p>
                        <ul class="small-circle-bullet">
                            <li> <?php echo get_field('terms_and_conditions_list_one', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_list_two', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_list_three', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_list_four', $post_id); ?></li> 
                        </ul> 
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_license_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_license_para_two', $post_id); ?></p>

                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_second_list_title', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                            <li> <?php echo get_field('terms_and_conditions_second_list_one', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_second_list_two', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_second_list_three', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_second_list_four', $post_id); ?></li>  
                        </ul>    
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_license_para_three', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_hyperlinking_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_description', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_first_list_one', $post_id); ?></li>
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_first_list_two', $post_id); ?></li>
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_first_list_three', $post_id); ?></li>  
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_first_list_four', $post_id); ?></li>  
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_first_list_five', $post_id); ?></li>  
                        </ul> 
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_para_one', $post_id); ?></p>

                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_second_list_title', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_one', $post_id); ?></li>
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_two', $post_id); ?></li>
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_three', $post_id); ?></li>  
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_four', $post_id); ?></li>  
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_five', $post_id); ?></li>  
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_six', $post_id); ?></li>  
                            <li>  <?php echo get_field('terms_and_conditions_hyperlinking_second_list_seven', $post_id); ?></li>  
                        </ul> 
                    
                   
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_para_three', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_para_four', $post_id); ?></p>

                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_third_list_title', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                            <li> <?php echo get_field('terms_and_conditions_hyperlinking_third_list_one', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_hyperlinking_third_list_two', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_hyperlinking_third_list_three', $post_id); ?></li>    
                        </ul>    
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_hyperlinking_para_five', $post_id); ?></p>

                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_iframes_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_iframes_description', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_content_liability_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_content_liability_description', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_your_privacy_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_your_privacy_description', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_reservation_of_rights_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_reservation_of_rights_description', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_removal_of_links_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_removal_of_links_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_removal_of_links_para_two', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('terms_and_conditions_disclaimer_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_disclaimer_para_one', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                            <li> <?php echo get_field('terms_and_conditions_disclaimer_list_one', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_disclaimer_list_two', $post_id); ?></li>
                            <li> <?php echo get_field('terms_and_conditions_disclaimer_list_three', $post_id); ?></li>   
                            <li> <?php echo get_field('terms_and_conditions_disclaimer_list_four', $post_id); ?></li> 
                        </ul> 

                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_disclaimer_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('terms_and_conditions_disclaimer_para_three', $post_id); ?></p>

                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Terms Description section end -->

<?php 
get_footer();
?>