<?php 
/* Template Name: Contact Page */ 
get_header();

$post_id = get_queried_object_id(); // gets the id of the current page/post
?>

<!-- Contact us Banner Section Start -->
<section class="first-section banner-swiper-section contact-us-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="banner-content"  data-aos="fade-right">
                        <!-- <h4 class="montserrat-bold">Contact Us</h4> -->
                        <h4 class="montserrat-bold"><?php echo get_field('contact_page_first_section_title', $post_id); ?></h4>
                       
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- Contact us Banner Section End -->
<!-- Appointment Form Section Start -->
<section class="appointment-form-sec">
    <div class="container-fluid wrapper">
        <div class="row">           
                <div class="appointment-form-content padding-zero"  data-aos="fade-up">
                    <h4 class="montserrat-bold green-color common-head"><?php echo get_field('contact_page_second_section_title', $post_id); ?></h4>
                    <p class="common-para grey-color"><?php echo get_field('contact_page_form_description_text', $post_id); ?></p>
                </div>
            
                <div class="col-md-6 padding-zero">

            <div class="contact-form" data-aos="fade-right">
                <form action="phpmailer.php" method="post" name="f1" onsubmit="return validate()">
                <div class="form-group">
                        <label for="fname" class="green-color montserrat-bold">First Name</label>  
                        <input type="text" name="f_name" id="f_name" class="contact-input" require>
                        <span class="red-color" id="fname_error"></span>
                 </div>
                 <div class="form-group">
                        <label for="lname" class="green-color montserrat-bold">Last Name</label>  
                        <input type="text" name="l_name" id="l_name" class="contact-input" require>
                        <span class="red-color" id="lname_error"></span>
                </div>
                 
                 <div class="form-group">
                        <label for="gender" class="green-color montserrat-bold">Gender</label><br>
                        
                        <div class="radio-container">
                        <div class="radio">
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male"><div class="radio-right">Male</div></label>
                        </div>
                        </div>                 

                        <div class="radio-container">
                        <div class="radio">
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female"> <div class="radio-right">Female</div></label>
                        </div>
                        </div>               

                        <div class="radio-container">
                        <div class="radio">
                        <input type="radio" id="others" name="gender" value="Others">
                        <label for="others"> <div class="radio-right">Others</div></label>               
                        </div>
                        </div>
                        <input type="text" name="others" id="others_gender" class="contact-input-others"><br>
                        <span class="red-color" id="gender_error"></span>                      
                </div>

                <div class="form-group">
                        <label for="dob" class="green-color montserrat-bold">Date Of Birth</label><br>  
                        <input type="date" name="dob" id="dob" class="contact-input-date" placeholder="--/--/----" require/><br>
                        <span class="red-color" id="dob_error"></span>
                </div>

                <div class="form-group">
                        <label for="phone" class="green-color montserrat-bold">Phone Number</label>
                        <input  type="number" name="phone" id="phone" class="contact-input" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;">
                        <span class="red-color" id="phone_error"></span>
                </div>

                <div class="form-group">
                        <label for="email" class="green-color montserrat-bold">Email ID</label>
                        <input type="text" name="email" id="email" class="contact-input" require>
                        <span class="red-color" id="email_error"></span>
                </div>

                <div class="form-group">
                        <label for="cancer_type" class="green-color montserrat-bold padding-zero">What is the known or suspected cancer type?</label>
                        <div class="row">
                        <div class="col-md-6">                           
                                
                                <label class="checkbox-container grey-color montserrat-bold">Upper Gastrointestinal 
                                <input type="checkbox" name="cancer_type[]" value="Upper Gastrointestinal">
                                <span class="checkmark"></span>
                                </label>
                               
                                <label class="checkbox-container grey-color montserrat-bold">Peritoneal Surface Malignancies
                                <input type="checkbox" name="cancer_type[]" value="Peritoneal Surface Malignancies">
                                <span class="checkmark"></span>
                                </label>
                               
                                <label class="checkbox-container grey-color montserrat-bold">Head And Neck
                                <input type="checkbox" name="cancer_type[]" value="Head And Neck">
                                <span class="checkmark"></span>
                                </label>
                                
                                <label class="checkbox-container grey-color montserrat-bold">Hepatobiliary
                                <input type="checkbox" name="cancer_type[]" value="Hepatobiliary">
                                <span class="checkmark"></span>
                                </label>                                
                           
                        </div>
                        <div class="col-md-6">
                                <label class="checkbox-container grey-color montserrat-bold">Gynecological Malignancies
                                <input type="checkbox" name="cancer_type[]" value="Gynecological Malignancies">
                                <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container grey-color montserrat-bold">Breast
                                <input type="checkbox" name="cancer_type[]" value="Breast">
                                <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container grey-color montserrat-bold">Thorax
                                <input type="checkbox" name="cancer_type[]" value="Thorax">
                                <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container grey-color montserrat-bold">Colorectal
                                <input type="checkbox" name="cancer_type[]" value="Colorectal">
                                <span class="checkmark"></span>
                                </label>
                        </div>
                        </div>
                        <span class="red-color" id="cancer_type_error"></span>
                    </div>

                 <div class="form-group">
                        <label for="diagnosed" class="green-color montserrat-bold">Have you been diagnosed?</label><br>

                        <div class="radio-container">
                        <div class="radio">
                        <input type="radio" id="yes" name="diagnosed" value="Yes">
                        <label for="yes"><div class="radio-right">Yes</div></label>
                        </div>
                        </div>                 

                        <div class="radio-container">
                        <div class="radio">
                        <input type="radio" id="no" name="diagnosed" value="No">
                        <label for="no"><div class="radio-right">No</div></label>
                        </div>
                        </div><br>

                        <br><span class="red-color" id="diagnosed_error"></span>
                 </div>

                <div class="form-group">
                        <label for="health-conditons" class="green-color montserrat-bold">Do you have any pre-existing health conditions?</label><br>
                        <textarea class="contact-comment" id="comment" name="comment" rows="10" cols="100"></textarea><br>
                        <span class="red-color" id="comment_error"></span>  
                </div>

                <div class="form-group">
                        <!-- Google Captcha -->                
                        <div class="g-recaptcha" data-sitekey="6Lcze9YiAAAAABa-pRhgTkAegts5GHUiwzO6-UVy" data-callback="verifyCaptcha"></div><br>
                        <span class="red-color" id="g-recaptcha-error"></span>                
                </div>

                <div class="form-group">
                <input type="submit" id="submit" name="submit" class="form-btn" value="Book an appointment"/>
                </div>

                </form>
                
            </div>
            </div>



            <div class="col-md-6 padding-zero">
                <div class="contact-content-page" data-aos="fade-left">
                    <div class="contact-content">
                        <h4 class="contact-content-head"><?php echo get_field('contact_page_form_image_title', $post_id); ?></h4>
                    </div>
                    <div class="contact-img">
                        <img class="img-fluid length-img" src="<?php echo get_stylesheet_directory_uri();?>/img/contact-us/contact-side-img.jpg">
                        <img class="img-fluid small-img" src="<?php echo get_stylesheet_directory_uri();?>/img/contact-us/contactus-img.jpg">
                    </div>  
                </div>
            </div>



            
        </div>
    </div>
</section>
<!-- Appointment Form Section End -->

<!-- Contact Detail Section Starts -->
<section class="contact-detail-sec justify-content-xl-around">
    <div class="container-fluid">
        <div class="row">
            <div class="contact-detail col-md-4" data-aos="fade-up">
            <h4 class="montserrat-bold green-color contact-detail-sec-head"><?php echo get_field('contact_details_first_column_title', $post_id); ?></h4> 
            <div class="contact-detail-sec-img">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/contact-us/icon1.svg">
            </div>
            <hr class="contact-detail-sec-line">
            <ul class="contact-detail-sec-ul green-color">
                <li class="contact-detail-sec-li"><?php echo get_field('contact_details_first_column_description', $post_id); ?></li>
            </ul>
            </div>

            <div class="contact-detail col-md-4" data-aos="fade-up">               
            <h4 class="montserrat-bold green-color contact-detail-sec-head"><?php echo get_field('contact_details_second_column_title', $post_id); ?></h4>           
            <div class="contact-detail-sec-img">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/contact-us/icon2.svg">
            </div>
           

            <hr class="contact-detail-sec-line">
            <ul class="contact-detail-sec-ul green-color">
                <li class="contact-detail-sec-li">                
                   <a href="mailto:<?php echo get_field('contact_details_second_column_description', $post_id); ?>" class="green-color"><?php echo get_field('contact_details_second_column_description', $post_id); ?></a>
                </li>
                 
            </ul>
            </div>
            <div class="contact-detail col-md-4" data-aos="fade-up">
            <h4 class="montserrat-bold green-color contact-detail-sec-head"><?php echo get_field('contact_details_third_column_title', $post_id); ?></h4> 

            <div class="contact-detail-sec-img">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/contact-us/icon3.svg">
            </div>
            <hr class="contact-detail-sec-line">
            <ul class="contact-detail-sec-ul green-color">
                <li class="contact-detail-sec-li">                
                    <a href="tel:<?php echo get_field('contact_details_third_column_description', $post_id); ?>" class="green-color"> +91 <?php echo get_field('contact_details_third_column_description', $post_id); ?></a>
                </li> 
            </ul>
            </div>
               
        </div>
    </div>
</section>
<!-- Contact Detail Section End -->

<?php
//  include 'footer.php' 
get_footer();
?>