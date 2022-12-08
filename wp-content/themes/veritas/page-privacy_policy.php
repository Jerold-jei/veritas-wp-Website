<?php

/* Template Name: Privacy Policy Page */

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Terms Banner Section Start -->
<section class="first-section banner-swiper-section latest-procedure-banner">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-content" data-aos="fade-right">
                    <h4 class="montserrat-bold white-color"><?php echo get_field('privacy_policy_banner_title', $post_id); ?></h4>
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
                    <h5 class="montserrat-bold"><?php echo get_field('privacy_policy_first_section_title', $post_id); ?></h5>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_first_section_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_first_section_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_first_section_para_three', $post_id); ?></p>

                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_consent_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_consent_description', $post_id); ?></p>

                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_information_we_collect_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_information_we_collect_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_information_we_collect_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_information_we_collect_para_three', $post_id); ?></p>
            
                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_how_use_information_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_how_use_information_description', $post_id); ?></p>
                    <ul class="small-circle-bullet">
                        <li><?php echo get_field('privacy_policy_how_use_information_list_one', $post_id); ?></li>
                        <li><?php echo get_field('privacy_policy_how_use_information_list_two', $post_id); ?></li>
                        <li><?php echo get_field('privacy_policy_how_use_information_list_three', $post_id); ?></li>
                        <li><?php echo get_field('privacy_policy_how_use_information_list_four', $post_id); ?></li>
                        <li><?php echo get_field('privacy_policy_how_use_information_list_five', $post_id); ?></li>
                        <li><?php echo get_field('privacy_policy_how_use_information_list_six', $post_id); ?></li>
                        <li><?php echo get_field('privacy_policy_how_use_information_list_seven', $post_id); ?></li>
                    </ul>

                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_log_files_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_log_files_description', $post_id); ?></p>

                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_cookies_and_web_beacons_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_cookies_and_web_beacons_description', $post_id); ?></p>

                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_advertising_partners_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_advertising_partners_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_advertising_partners_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_advertising_partners_para_three', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_third_party_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_third_party_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_third_party_para_two', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_ccpa_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_ccpa_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_ccpa_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_ccpa_para_three', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_ccpa_para_four', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_ccpa_para_five', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_gdpr_data_protection_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_two', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_three', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_four', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_five', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_six', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_seven', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_gdpr_data_protection_para_eight', $post_id); ?></p>
                    
                    <h6 class="montserrat-bold"><?php echo get_field('privacy_policy_childrens_information_title', $post_id); ?></h6>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_childrens_information_para_one', $post_id); ?></p>
                    <p class="common-para grey-color"><?php echo get_field('privacy_policy_childrens_information_para_two', $post_id); ?></p>


                </div>

            </div>
        </div>
    </div>
</section>

<!-- Terms Description section end -->

<?php
get_footer();
?>