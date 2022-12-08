<?php 

/* Template Name: Blog Page */ 

get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post

?>

<section class="first-section banner-swiper-section blog-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="blog-content" data-aos="fade-right">
                        <h4 class="montserrat-bold"><?php echo get_field('blog_page_banner_title', $post_id); ?></h4> 
                    </div>
                </div>
            </div>
        </div>
 </section>

 <section class="blog-sec">
        <div class="container-fluid wrapper">
            <div class="row blog-search-row">
                <div class="col-md-6" data-aos="fade-right">
                    <h4 class="montserrat-bold golden-color"><?php echo get_field('blog_page_whats_new_title', $post_id); ?></h4>                    
                </div>
                <div class="">
                <form class="form-search" data-aos="fade-left">
                <input type="search" placeholder="Search...">
                <button type="submit">Search</button>
        </form>
                </div>
            </div>
            <hr class="blog-sec-line">

            <div class="row ">
                <div class="blog-detail col-md-6" data-aos="fade-right">
                <div class="blog-img">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset2-100.jpg">
                </div>  
                <div class="blog-inner-content">
                    <h4 class="montserrat-bold green-color "><?php echo get_field('blog_page_oncological_robotic_surgery_title', $post_id); ?></h4>   
                    <p class="common-p grey-color"><?php echo get_field('blog_page_oncological_robotic_surgery_description', $post_id); ?></p>
                    <a href="#" class="blog-btn">Read Article</a>
                </div>

                </div>
                <div class="vl green-color"></div>   

                <div class="blog-detail col-md-6" data-aos="fade-left">
                <div class="blog-img">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset3-100.jpg">
                </div> 
                <div class="blog-inner-content">
                    <h4 class="montserrat-bold green-color "><?php echo get_field('blog_page_early_diagnoses_title', $post_id); ?></h4>   
                    <p class="common-p grey-color"><?php echo get_field('blog_page_early_diagnoses_description', $post_id); ?></p>
                    <a href="#" class="blog-btn">Read Article</a>
                </div>
                </div>
            </div>

        </div>
    
 </section>

 <section class="blog-other-sec">
        <div class="container-fluid wrapper">
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <h4 class="montserrat-bold golden-color"><?php echo get_field('blog_page_others_title', $post_id); ?></h4>                    
                </div>               
            </div>
           

            <div class="row">
                <div class="blog-others col-md-6" data-aos="fade-right">
                <div class="row">
                <div class="col-md-6">
                    <div class="blog-others-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset-1-100.jpg">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="blog-others-inner-content">
                        <h4 class="blog-others-head montserrat-semibold green-color "><?php echo get_field('blog_page_multidisciplinary_treatment_title', $post_id); ?></h4>   
                        <p class="blog-others-p grey-color"><?php echo get_field('blog_page_multidisciplinary_treatment_description', $post_id); ?></p>
                        <a href="#" class="blog-btn">Read Article</a>
                    </div>
                </div>
                </div>
                </div>
                

                <div class="blog-others col-md-6" data-aos="fade-left">
                <div class="row">
                <div class="col-md-6">
                    <div class="blog-others-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset-2-100.jpg">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="blog-others-inner-content">
                        <h4 class="blog-others-head montserrat-semibold green-color "><?php echo get_field('blog_page_cancer_recurrence_title', $post_id); ?></h4>   
                        <p class="blog-others-p grey-color"><?php echo get_field('blog_page_cancer_recurrence_description', $post_id); ?> </p>
                        <a href="#" class="blog-btn">Read Article</a>
                    </div>
                </div>
                </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="blog-others col-md-6" data-aos="fade-right">
                <div class="row">
                <div class="col-md-6">
                    <div class="blog-others-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset-3-100.jpg">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="blog-others-inner-content">
                        <h4 class="blog-others-head montserrat-semibold green-color ">Multidisciplinary Treatment & Why it Works</h4>   
                        <p class="blog-others-p grey-color">Cancer cannot be treated with a one size fits all approach. Personalised 
                                                        care and treatment are the best way to ensure the patient receives the maximum help and comfort 
                                                        they need to make their treatment period more manageable.</p>
                        <a href="#" class="blog-btn">Read Article</a>
                    </div>
                </div>
                </div>
                </div>
                

                <div class="blog-others col-md-6" data-aos="fade-left">
                <div class="row">
                <div class="col-md-6">
                    <div class="blog-others-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset4-100.jpg">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="blog-others-inner-content">
                        <h4 class="blog-others-head montserrat-semibold green-color ">Stay ahead of Cancer Recurrence - how to avoid relapse</h4>   
                        <p class="blog-others-p grey-color">Every cancer survivor knows the fear of a cancer recurrence. It is one of the most common worries that plague a cancer survivor, 
                                                        even when you hear the words cancer-free. Cancer recurrence is a common </p>
                        <a href="#" class="blog-btn">Read Article</a>
                    </div>
                </div>
                </div>
                </div>
            </div> -->

            <!-- <div class="row">
                <div class="blog-others col-md-6" data-aos="fade-right">
                <div class="row">
                <div class="col-md-6">
                    <div class="blog-others-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset5-100.jpg">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="blog-others-inner-content">
                        <h4 class="blog-others-head montserrat-semibold green-color ">Multidisciplinary Treatment & Why it Works</h4>   
                        <p class="blog-others-p grey-color">Cancer cannot be treated with a one size fits all approach. Personalised 
                                                        care and treatment are the best way to ensure the patient receives the maximum help and comfort 
                                                        they need to make their treatment period more manageable.</p>
                        <a href="#" class="blog-btn">Read Article</a>
                    </div>
                </div>
                </div>
                </div>
                

                <div class="blog-others col-md-6" data-aos="fade-left">
                <div class="row">
                <div class="col-md-6">
                    <div class="blog-others-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/blog/Asset6-100.jpg">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="blog-others-inner-content">
                        <h4 class="blog-others-head montserrat-semibold green-color ">Stay ahead of Cancer Recurrence - how to avoid relapse</h4>   
                        <p class="blog-others-p grey-color">Every cancer survivor knows the fear of a cancer recurrence. It is one of the most common worries that plague a cancer survivor, 
                                                        even when you hear the words cancer-free. Cancer recurrence is a common </p>
                        <a href="#" class="blog-btn">Read Article</a>
                    </div>
                </div>
                </div>
                </div>
            </div> -->
            <a href="#" class="blog-view-btn">View more<i class="fa fa-angle-down"></i></a> 
        </div>
    
 </section>



 <?php
//  include 'footer.php' 

get_footer();
?>