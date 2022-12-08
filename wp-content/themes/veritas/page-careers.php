<?php 

/* Template Name: Careers Page */ 
get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post

?>
<section class="first-section banner-swiper-section career-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="career-content" data-aos="fade-right">
                        <h4 class="montserrat-bold"><?php echo get_field('careers_page_banner_title', $post_id); ?></h4> 
                    </div>
                </div>
            </div>
        </div>
 </section>

 <section class="careers-sec">
    <div class="container-fluid wrapper">
    <div class="row careers-content-row">
        <div class="col-md-6 flex-center-row">      
        <div class="careers-content"> 
                <h1 class="common-head green-color montserrat-bold" data-aos="fade-right"><?php echo get_field('careers_page_banner_title', $post_id); ?></h1>
                    <p class="common-p grey-color" data-aos="fade-right"><?php echo get_field('careers_page_careers_description', $post_id); ?></p>
                    <h1 class="common-head green-color montserrat-bold" data-aos="fade-right"><?php echo get_field('careers_page_careers_current_vacancies_title', $post_id); ?></h1>
                    <p class="common-p grey-color" data-aos="fade-right"><?php echo get_field('careers_page_careers_current_vacancies_content', $post_id); ?><a href="mailto:<?php echo get_field('careers_page_careers_current_vacancies_email', $post_id); ?>"><?php echo get_field('careers_page_careers_current_vacancies_email', $post_id); ?></a></p>
                    
            </div>         
        </div>

        <div class="col-md-6">
            <div class="img-1 position-relative" data-aos="fade-left">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/career-img/career-img1.jpg">
            </div>
            <div class="career-image position-absolute" data-aos="fade-left">                 
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/career-img/career-img2.jpg">               
            </div>
        </div>
    </div>
    </div>
 </section>



<?php
//  include 'footer.php' 
get_footer();
?>