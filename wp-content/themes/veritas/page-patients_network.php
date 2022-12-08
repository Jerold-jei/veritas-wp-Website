<?php
/* Template Name: Patients Network Page */
get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- About us Banner Section Start -->
<section class="first-section banner-swiper-section patient-banner">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="caps-banner-content" data-aos="fade-right">
                    <h4 class="montserrat-bold white-color"><?php echo get_field('patient_network_banner_title', $post_id); ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us Banner Section End -->
<!-- patient network content start -->
<section class="who-we-are">
    <div class="container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-9">
                <div class="who-we-are-content">
                    <h4 class="montserrat-bold green-color common-head" data-aos="fade-up"><?php echo get_field('patient_network_second_section_title', $post_id); ?></h4>
                    <p class="common-para grey-color" data-aos="fade-up"><?php echo get_field('patient_network_second_section_para_one', $post_id); ?></p>
                    <p class="common-para grey-color" data-aos="fade-up"><?php echo get_field('patient_network_second_section_para_two', $post_id); ?></p>
                    <p class="common-para grey-color" data-aos="fade-up"><?php echo get_field('patient_network_second_section_para_three', $post_id); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get In touch start -->
<section class="get-in-touch">
    <div class="container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-8">
                <div class="who-we-are-content">
                    <h4 class="montserrat-bold green-color common-head" data-aos="fade-up"><?php echo get_field('patient_network_get_in_touch_title', $post_id); ?></h4>
                    <p class="common-para grey-color" data-aos="fade-up"><?php echo get_field('patient_network_get_in_touch_para_one', $post_id); ?></p>
                    <p class="common-para grey-color" data-aos="fade-up"><?php echo get_field('patient_network_get_in_touch_para_two', $post_id); ?></p>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wrapper get-in-touch-form-container">
        <div class="row flex-center-row">
            <div class="col-md-10">
                <div class="get-in-touch-form" data-aos="fade-up">

                    <form action="phpmailer.php" method="post" name="network_form" onsubmit="return network_form_validate()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="green-color montserrat-bold">Name</label>
                                    <input type="text" class="contact-input" id="name" name="name">
                                    <span class="red-color" id="name_error"></span><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age" class="green-color montserrat-bold">Age</label>
                                    <input type="number" class="contact-input" id="age" name="age" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;">
                                    <span class="red-color" id="age_error"></span><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="green-color montserrat-bold">Email id</label>
                                    <input type="text" class="contact-input" id="email" name="email">
                                    <span class="red-color" id="email_error"></span><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="green-color montserrat-bold">Phone Number</label>
                                    <input type="number" name="phone" id="phone" class="contact-input" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;">
                                    <span class="red-color" id="phone_error"></span><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="green-color montserrat-bold">Gender</label><br>
                                <div class="radio-container">
                                    <div class="radio">
                                        <input type="radio" id="male" name="gender" value="Male">
                                        <label for="male">
                                            <div class="radio-right">Male</div>
                                        </label>
                                    </div>
                                </div>

                                <div class="radio-container">
                                    <div class="radio">
                                        <input type="radio" id="female" name="gender" value="Female">
                                        <label for="female">
                                            <div class="radio-right">Female</div>
                                        </label>
                                    </div>
                                </div>

                                <div class="radio-container">
                                    <div class="radio">
                                        <input type="radio" id="others" name="gender" value="Others">
                                        <label for="others">
                                            <div class="radio-right">Others</div>
                                        </label>
                                    </div>
                                </div>
                                <input type="text" name="others" id="others_gender" class="contact-input-others"><br>
                                <span class="red-color" id="gender_error"></span>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class="green-color montserrat-bold">What is your type of cancer?</label>
                                    <div class="form-group">

                                        <!-- <div class="dropdown" id="tell_us_drop_down">
                                            <button type="button" class="btn btn-primary dropdown-toggle form-dropdown"
                                                data-toggle="dropdown" id="selected" name="cancer_type" value=" Upper Gastrointestinal Malignancies">
                                                Upper Gastrointestinal Malignancies
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" value="Colorectal">Colorectal </a>
                                                <a class="dropdown-item" value="Gynecological Malignancies">Gynecological Malignancies </a>
                                                <a class="dropdown-item" value="Peritoneal Surface Malignancies">Peritoneal Surface Malignancies  </a>
                                                <a class="dropdown-item" value="Hepatobiliary">Hepatobiliary  </a>
                                                <a class="dropdown-item" value="Breast">Breast </a>
                                                <a class="dropdown-item" value="Head And Neck"> Head And Neck </a>
                                                <a class="dropdown-item" value="Thorax"> Thorax  </a>
                                            </div>

                                            <input type="hidden" name="tell_us" id="tell_us" value="">
                                        </div> -->

                                        <div class="dropdown" id="tell_us_drop_down">
                                            <select type="button" class="btn btn-primary dropdown-toggle form-dropdown" data-toggle="dropdown" id="selected" name="cancer_type">

                                                <div class="dropdown-menu">
                                                    <option value=""></option>
                                                    <option value="Upper Gastrointestinal Malignancies">Upper Gastrointestinal Malignancies</option>
                                                    <option value="Colorectal">Colorectal </option>
                                                    <option value="Gynecological Malignancies">Gynecological Malignancies </option>
                                                    <option value="Peritoneal Surface Malignancies">Peritoneal Surface Malignancies </option>
                                                    <option value="Hepatobiliary">Hepatobiliary </option>
                                                    <option value="Breast">Breast </option>
                                                    <option value="Head And Neck"> Head And Neck </option>
                                                    <option value="Thorax"> Thorax </option>
                                                </div>
                                            </select>
                                            <!-- <input type="hidden" name="tell_us" id="tell_us" value=""> -->
                                        </div>

                                    </div>
                                    <span class="red-color" id="cancer_type_error"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="interests" class="green-color montserrat-bold">I am interested in</label>
                                <div class=" ">
                                    <label class="checkbox-container grey-color montserrat-bold">Joining the patient network as a cancer patient
                                        <input type="checkbox" name="network_type[]" value="Joining the patient network as a cancer patient">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-container grey-color montserrat-bold">Joining the patient network as a cancer survivor to help othercancer patients
                                        <input type="checkbox" name="network_type[]" value="Joining the patient network as a cancer survivor to help other">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-container grey-color montserrat-bold">Joining the patient network as a caregiver to a cancer patient
                                        <input type="checkbox" name="network_type[]" value="Joining the patient network as a caregiver to a cancer patient">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <span class="red-color" id="network_type_error"></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- Google Captcha -->
                                    <div class="g-recaptcha" data-sitekey="6Lcze9YiAAAAABa-pRhgTkAegts5GHUiwzO6-UVy" data-callback="verifyCaptcha"></div><br>
                                    <span class="red-color" id="g-recaptcha-error"></span>
                                </div>
                            </div>

                            <div class="col-md-12 text-center btnDiv">
                                <input type="submit" id="network_submit" name="network_submit" class="veritas-btn" value="Submit" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wrapper newletter-card">
        <div class="row flex-center-row">
            <div class="col-md-11">
                <div class="newletter-card-div" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="news-card-text">
                                <h5 class="montserrat-bold white-color common-head"><?php echo get_field('patient_network_newletter_subscribe_title', $post_id); ?></h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card-form">
                                <p><?php echo get_field('patient_network_newletter_subscribe_description', $post_id); ?></p>

                                <form class="" action="phpmailer.php" method="post" name="newsletter_form" onsubmit="return newsletter_form_validate()">
                                    <div class="newsletterForm">
                                        <input placeholder="Enter your email here" type="text" name="newsletter_email" id="newsletter_email" class="subscribeText form-control">
                                        <input type="submit" name="newsletter_submit" class="btn subscribeButton" value="Submit">

                                        <span class="red-color" id="newsletter_email_error"></span>
                                    </div>
                                </form>

                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<section class="stories-sec">
    <div class="row stories-sec-head text-center">
        <div class="col-md-12">
            <h4 class="montserrat-bold green-color common-head" data-aos="fade-up"><?php echo get_field('patient_network_survivor_stories_title', $post_id); ?></h4>
        </div>
    </div>
    <div class="row storiesSwiper-row">
        <div class="col-md-1 padding-zero"></div>
        <div class="col-md-11 padding-zero">
            <div class="swiper storiesSwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row stories-swiper-row">
                            <div class="col-md-1 stories-number-div">
                                <div class="stories-number">
                                    <h6 class="golden-color">01</h6>
                                </div>
                            </div>
                            <div class="col-md-10 stories-content-col">
                                <div class="stories-swiper-content-div">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="stories-swiper-content">
                                                <h5 class="montserrat-bold"><?php echo get_field('patient_network_survivor_stories_first_swiper_title', $post_id); ?></h5>
                                                <p><?php echo get_field('patient_network_survivor_stories_first_swiper_first_para', $post_id); ?></p>
                                                <p><?php echo get_field('patient_network_survivor_stories_first_swiper_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5 stories-swiper-img-div">
                                            <div class="stories-swiper-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/patient-network/patient-swiper-img.jpg" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row stories-swiper-row">
                            <div class="col-md-1 stories-number-div">
                                <div class="stories-number">
                                    <h6 class="golden-color">02</h6>
                                </div>
                            </div>
                            <div class="col-md-10 stories-content-col">
                                <div class="stories-swiper-content-div">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="stories-swiper-content">
                                                <h5 class="montserrat-bold"><?php echo get_field('patient_network_survivor_stories_second_swiper_title', $post_id); ?></h5>
                                                <p><?php echo get_field('patient_network_survivor_stories_second_swiper_first_para', $post_id); ?></p>
                                                <p><?php echo get_field('patient_network_survivor_stories_second_swiper_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5 stories-swiper-img-div">
                                            <div class="stories-swiper-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/patient-network/patient-swiper-img.jpg" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row stories-swiper-row">
                            <div class="col-md-1 stories-number-div">
                                <div class="stories-number">
                                    <h6 class="golden-color">03</h6>
                                </div>
                            </div>
                            <div class="col-md-10 stories-content-col">
                                <div class="stories-swiper-content-div">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="stories-swiper-content">
                                                <h5 class="montserrat-bold"><?php echo get_field('patient_network_survivor_stories_third_swiper_title', $post_id); ?></h5>
                                                <p><?php echo get_field('patient_network_survivor_stories_third_swiper_first_para', $post_id); ?></p>
                                                <p><?php echo get_field('patient_network_survivor_stories_third_swiper_second_para', $post_id); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5 stories-swiper-img-div">
                                            <div class="stories-swiper-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/patient-network/patient-swiper-img.jpg" class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

</section>

<section class="queries-sec">
    <div class="container-fluid wrapper">
        <div class="row flex-center-row">
            <div class="col-md-9">
                <div class="queries-div">
                    <div class="row flex-center-row">
                        <div class="col-md-7">
                            <div class="queries-text" data-aos="fade-right">
                                <h5 class="montserrat-bold golden-color"><?php echo get_field('patient_network_query_text', $post_id); ?>
                                    <a class="montserrat-bold golden-color" href="mailto:<?php echo get_field('patient_network_query_email', $post_id); ?>"><?php echo get_field('patient_network_query_email', $post_id); ?></a>
                                </h5>
                                <!--<div class="queries-form-div">-->
                                <!--    <div class="queries-form">-->
                                <!--        <form class="">-->
                                <!--            <div class="queriesForm">-->
                                <!--                <input placeholder="Enter your email here" type="text" id="email_footer" class="subscribeText form-control" value="">-->
                                <!--                <button type="button" class="btn  subscribeButton"><i class="fa fa-angle-right"></i></button>-->
                                <!--            </div>-->
                                <!--        </form>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="queires-img" data-aos="fade-left">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/patient-network/mail-big-icon.svg" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
</section>

<?php
//  include 'footer.php' 
get_footer();
?>