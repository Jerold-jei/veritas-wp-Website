<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<section class="footer-sec">
    <div class="container-fluid wrapper">
        <div class="row footer-subscribe-div justify-content-md-between align-items-center">
            <div class="col-md-3">
                <a href="<?php echo home_url('/'); ?>" class="footer-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/footlogo.png" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4">
                <div class="footer-subscribe-text">
                    <h4 class="montserrat-semibold">
                        <?php if (get_theme_mod('footer_subscribe_text')) : ?>
                            <?php echo get_theme_mod('footer_subscribe_text') ?>
                    <?php endif; ?>
                    </h4>
                </div>
            </div>

            <!-- <div class="col-md-4">
                <form class="">
                    <div class="subscribeForm">
                        <input placeholder="Enter Email" type="text" id="email_footer" class="subscribeText form-control" value="">
                        <span class="form-error footer-form-error"></span>
                        <button type="button" class="btn  subscribeButton">Subscribe</button>
                    </div>
                </form>
            </div> -->

            <div class="col-md-4 padding-zero">
                <form class="" action="phpmailer.php" method="post" name="subcribe_email" onsubmit="return email_validate()">
                    <div class="mb-3 subscribeForm">
                        <input placeholder="Enter Email" type="text" id="email_footer" name="email_footer" class="subscribeText form-control" value="">
                        <input type="submit" name="subcribe_email" id="subcribe_email" class="btn  subscribeButton" value="Subscribe" />
                    </div>
                    <span class="red-color footer-form-error" id="footer-form-error"></span>
                </form>
            </div>

        </div>
    </div>
    <div class="container-fluid wrapper">
        <div class="row footer-links-div justify-content-md-between">
            <div class="col-md-3">
                <div class="footer-links-content">
                    <div class="footer-links-title">
                        <h4 class="footer-title montserrat-semibold">
                            <?php if (get_theme_mod('footer_contact_column')) : ?>
                                <?php echo get_theme_mod('footer_contact_column') ?>
                            <?php endif; ?>
                         </h4>
                    </div>
                    <div class="footer-links-list">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa fa-phone white-color"></i>
                            </div>
                            <div class="col-md-10">
                                <p><a href="tel:<?php echo get_theme_mod('footer_contact_column_phone') ?>" class="white-color">
                                        <?php if (get_theme_mod('footer_contact_column_phone')) : ?>
                                            <?php echo get_theme_mod('footer_contact_column_phone') ?>
                                        <?php endif; ?> </a></p>
                                <!--<p><a href="#" class="white-color"> +91 988 999 9999</a></p>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="small-head golden-color">
                                    <?php if (get_theme_mod('footer_contact_column_address_label')) : ?>
                                        <?php echo get_theme_mod('footer_contact_column_address_label') ?>
                                    <?php endif; ?></h6>
                            </div>
                            <div class="col-md-1">
                                <i class="fa fa-map-marker white-color"></i>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <?php if (get_theme_mod('footer_contact_column_address')) : ?>
                                        <?php echo get_theme_mod('footer_contact_column_address') ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="small-head golden-color">
                                    <?php if (get_theme_mod('footer_contact_column_email_label')) : ?>
                                        <?php echo get_theme_mod('footer_contact_column_email_label') ?>
                                    <?php endif; ?>
                                </h6>
                            </div>
                            <div class="col-md-1">
                                <i class="fa fa-envelope white-color"></i>
                            </div>
                            <div class="col-md-10">
                                <p><a href="mailto:<?php if (get_theme_mod('footer_contact_column_email')) : ?>
                                        <?php echo get_theme_mod('footer_contact_column_email') ?>
                                    <?php endif; ?>" class="white-color">
                                        <?php if (get_theme_mod('footer_contact_column_email')) : ?>
                                            <?php echo get_theme_mod('footer_contact_column_email') ?>
                                        <?php endif; ?></a>
                                </p>
                                <!--<p><a href="#" class="white-color"> manager@veritas.com</a></p>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-links-content">
                    <div class="footer-links-title">
                        <h4 class="footer-title montserrat-semibold">
                            <?php if (get_theme_mod('footer_second_column_heading')) : ?>
                                <?php echo get_theme_mod('footer_second_column_heading') ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="footer-links-list">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                //  Display footer menu  
                                if (has_nav_menu('footer-menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu',
                                        'container' => '',
                                        'items_wrap' => '%3$s'
                                    ));
                                }
                                ?>
                                <!-- <p><a href="aboutus.php#who-we-are" class="white-color"> Who we are</a></p>
                                <p><a href="aboutus.php#vision-mission-sec" class="white-color"> Our Vision & Team Philosophy</a></p>
                                <p><a href="aboutus.php#our-team-expert-sec" class="white-color"> Our Team</a></p>
                                <p><a href="aboutus.php#core-values-sec" class="white-color"> Why us</a></p>
                                <p><a href="aboutus.php#become-patient-sec" class="white-color"> Becoming a patient</a></p>
                                <p><a href="patient-network.php" class="white-color"> Our Patient Network</a></p>
                                <p><a href="careers.php" class="white-color"> Careers</a></p>
                                <p><a href="blog.php" class="white-color"> Blog</a></p> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="footer-links-title">
                        <h4 class="footer-title montserrat-semibold">About</h4>
                    </div>
                    <div class="footer-links-list">
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <p><a href="aboutus.php#who-we-are" class="white-color"> Who we are</a></p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-links-content">
                    <div class="footer-links-title">
                        <h4 class="footer-title montserrat-semibold">
                            <?php if (get_theme_mod('footer_third_column_heading')) : ?>
                                <?php echo get_theme_mod('footer_third_column_heading') ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="footer-links-list">
                        <div class="row">
                            <div class="col-md-12">

                            <?php
                                //  Display footer second menu  
                                if (has_nav_menu('footer-second-menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-second-menu',
                                        'container' => '',
                                        'items_wrap' => '%3$s'
                                    ));
                                }
                            ?>

                                <!-- <p><a href="colorectal.php" class="white-color"> Colorectal</a></p>
                                <p><a href="gastrointestinal.php" class="white-color"> Upper Gastrointestinal Malignancies</a></p>
                                <p><a href="gynecological.php" class="white-color"> Gynecological Malignancies </a></p>
                                <p><a href="peritoneal.php" class="white-color"> Peritoneal Surface Malignancies </a></p>
                                <p><a href="hepatobiliary.php" class="white-color"> Hepatobiliary </a></p>
                                <p><a href="breast.php" class="white-color"> Breast </a></p>
                                <p><a href="head-and-neck.php" class="white-color"> Head And Neck </a></p>
                                <p><a href="thorax.php" class="white-color"> Thorax </a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-links-content">
                    <div class="footer-links-title">
                        <h4 class="footer-title montserrat-semibold">
                            <?php if (get_theme_mod('footer_fourth_column_heading')) : ?>
                                <?php echo get_theme_mod('footer_fourth_column_heading') ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="footer-links-list">
                        <div class="row">
                            <div class="col-md-12">
                            <?php
                                //  Display footer second menu  
                                if (has_nav_menu('footer-third-menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-third-menu',
                                        'container' => '',
                                        'items_wrap' => '%3$s'
                                    ));
                                }
                            ?>
                                <!-- <p><a href="contactus.php" class="white-color"> Book an appointment</a></p>
                                <p><a href="privacy-policy.php" class="white-color"> Privacy policy</a></p>
                                <p><a href="terms-conditions.php" class="white-color"> Terms & Conditions</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-sociallinks-content">
                    <div class="footer-links-title">
                        <h4 class="sociallinks-head montserrat-semibold">
                            <?php if (get_theme_mod('follow_us_text')) : ?>
                                <?php echo get_theme_mod('follow_us_text') ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="social-media-icons">
                        <a href="<?php echo get_theme_mod('facebook_link') ?>" target="_blank" class="radius-icon"><i class="fa fa-facebook-f"></i></a>
                        <a href="<?php echo get_theme_mod('instagram_link') ?>" target="_blank" class="radius-icon"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo get_theme_mod('linkedin_link') ?>" target="_blank" class="radius-icon"><i class="fa fa-linkedin"></i></a>
                        <a href="<?php echo get_theme_mod('youtube_link') ?>" target="_blank" class="radius-icon"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="copy-right-sec">
    <p>Website By <a href="https://www.tablonoir.com/">
            <?php if (get_theme_mod('copy_rights_field')) : ?>
                <?php echo get_theme_mod('copy_rights_field') ?>
            <?php endif; ?> </a>
        <?php if (get_theme_mod('copy_rights_label_field')) : ?><?php echo get_theme_mod('copy_rights_label_field') ?>
    <?php endif; ?> </p>
</section>





<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Animation Cdn link -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/ScrollToPlugin.min.js'></script> -->

<!-- Fancybox CDN -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>

<!--AOS LIBRARY-->
<script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>

<!-- Re Captcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Custome JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/build-app.js"></script>

</body>

</html>