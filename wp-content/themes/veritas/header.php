<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veritas</title>

    <meta name="charset" content="UTF-8">
    <meta name="copyright" content="Copyright ©">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="google-site-verification" content="rvRbTf02ZjGRg14FiPRw7DU4411hMZNZ-5zgoVYLs-E" />
    <meta name="facebook-domain-verification" content="9lz4bwmpw2mzycwzavsjejniisjb70" />
    <!---- Fav icon ---->

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/fav-icon.png">


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper Js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!--AOS ANIMATIONS-->
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>

    <!-- Fancy Box CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>

    <!----- Style Sheet ----->
    <link rel="stylesheet" href="./style.css">

    <?php wp_head(); ?>


</head>



<body>

    <script type="text/javascript">
        // Contact us Page form validation
        function validate() {
            let fname = document.f1.f_name.value;
            let lname = document.f1.l_name.value;

            let gender = document.f1.gender.value;

            let others = document.f1.others_gender.value;
            let dob = document.f1.dob.value;
            let phone = document.f1.phone.value;
            let email = document.f1.email.value;
            let diagnosed = document.f1.diagnosed.value;
            let comment = document.f1.comment.value;


            let response = grecaptcha.getResponse();

            var status = false;

            if (fname == "") {

                document.getElementById("fname_error").innerHTML = "Please enter your First Name!!!";
                status = false;
            } else {
                document.getElementById("fname_error").innerHTML = "";
                status = true;
            }

            if (lname == "") {
                document.getElementById("lname_error").innerHTML = "Please enter your Last Name!!!";
                status = false;
            } else {
                document.getElementById("lname_error").innerHTML = "";
                status = true;
            }

            if (f1.gender[2].checked == true) {

                if (others == "") {
                    document.getElementById("gender_error").innerHTML = "Please Enter your Gender!!!";
                    status = false;
                } else {
                    document.getElementById("gender_error").innerHTML = "";
                    status = true;
                }

            } else if ((f1.gender[0].checked == false) && (f1.gender[1].checked == false) && (f1.gender[2].checked == false)) {
                document.getElementById("gender_error").innerHTML = "Please Select your Gender!!!";
                status = false;
            } else {
                document.getElementById("gender_error").innerHTML = "";
                document.getElementById("others_gender").value = '';
                status = true;
            }

            if (dob == "") {
                document.getElementById("dob_error").innerHTML = "Please enter your Date of Birth!!!";
                status = false;
            } else {
                document.getElementById("dob_error").innerHTML = "";
                status = true;
            }

            if (phone == "") {
                document.getElementById("phone_error").innerHTML = "Please enter your Phone Number!!!";
                status = false;
            } else if (!phone.match(/^\d{10}$/g)) {
                document.getElementById("phone_error").innerHTML = "Invalid Phone Number!!!";
                status = false;
            } else {
                document.getElementById("phone_error").innerHTML = "";
                status = true;
            }

            if (email == "") {
                document.getElementById("email_error").innerHTML = "Please enter your valid Email ID!!!";
                status = false;
            } else {
                document.getElementById("email_error").innerHTML = "";
                status = true;
            }

            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                document.getElementById("email_error").innerHTML = "Invalid Email Address!!!";
                status = false;
            }

            var i;
            var checked = 0;
            var chks = document.getElementsByName('cancer_type[]');

            for (i = 0; i < chks.length; i++) {
                if (chks[i].checked) {
                    checked++;

                }
            }
            if (checked > 0) {

                document.getElementById("cancer_type_error").innerHTML = "";
                status = true;

            } else {
                document.getElementById("cancer_type_error").innerHTML = "Please Select Cancer Type!!!";
                status = false;
            }


            if ((f1.diagnosed[0].checked == false) && (f1.diagnosed[1].checked == false)) {
                document.getElementById("diagnosed_error").innerHTML = "Please Select Yes or No!!!";
                status = false;
            } else {
                document.getElementById("diagnosed_error").innerHTML = "";
                status = true;
            }

            if (comment == "") {
                document.getElementById("comment_error").innerHTML = "Please enter your Comment!!!";
                status = false;
            } else {
                document.getElementById("comment_error").innerHTML = "";
                status = true;
            }

            if (response.length == 0) {
                document.getElementById("g-recaptcha-error").innerHTML = 'Please Select the Captacha.';
                status = false;
            }

            function verifyCaptcha(token) {
                $recaptcha_response = token;
                document.getElementById("g-recaptcha-error").innerHTML = '';
            }

            return status;

        }


        // Patient Network Page form validation
        function network_form_validate() {
            let name = document.network_form.name.value;
            let age = document.network_form.age.value;
            let email = document.network_form.email.value;
            let phone = document.network_form.phone.value;
            let gender = document.network_form.gender.value;
            let others = document.network_form.others_gender.value;

            let cancer_type = document.network_form.cancer_type.value;;

            let response = grecaptcha.getResponse();

            var status = false;

            if (name == "") {

                document.getElementById("name_error").innerHTML = "Please enter your Name!!!";
                status = false;
            } else {
                document.getElementById("name_error").innerHTML = "";
                status = true;
            }

            if (age == "") {
                document.getElementById("age_error").innerHTML = "Please enter your Age!!!";
                status = false;
            } else {
                document.getElementById("age_error").innerHTML = "";
                status = true;
            }

            if (network_form.gender[2].checked == true) {

                if (others == "") {
                    document.getElementById("gender_error").innerHTML = "Please Enter your Gender!!!";
                    status = false;
                } else {
                    document.getElementById("gender_error").innerHTML = "";
                    status = true;
                }

            } else if ((network_form.gender[0].checked == false) && (network_form.gender[1].checked == false) && (network_form.gender[2].checked == false)) {
                document.getElementById("gender_error").innerHTML = "Please Select your Gender!!!";
                status = false;
            } else {
                document.getElementById("gender_error").innerHTML = "";
                document.getElementById("others_gender").value = '';
                status = true;
            }


            if (email == "") {
                document.getElementById("email_error").innerHTML = "Please enter your valid Email ID!!!";
                status = false;
            } else {
                document.getElementById("email_error").innerHTML = "";
                status = true;
            }

            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                document.getElementById("email_error").innerHTML = "Invalid Email Address!!!";
                status = false;
            }

            if (phone == "") {
                document.getElementById("phone_error").innerHTML = "Please enter your Phone Number!!!";
                status = false;
            } else if (!phone.match(/^\d{10}$/g)) {
                document.getElementById("phone_error").innerHTML = "Invalid Phone Number!!!";
                status = false;
            } else {
                document.getElementById("phone_error").innerHTML = "";
                status = true;
            }

            if (cancer_type == "") {
                document.getElementById("cancer_type_error").innerHTML = "Please Select Your Cancer Type!!!";
                status = false;
            } else {
                document.getElementById("cancer_type_error").innerHTML = "";
                status = true;
            }


            var i;
            var checked = 0;
            var chks = document.getElementsByName('network_type[]');

            for (i = 0; i < chks.length; i++) {
                if (chks[i].checked) {
                    checked++;

                }
            }
            if (checked > 0) {

                document.getElementById("network_type_error").innerHTML = "";
                status = true;

            } else {
                document.getElementById("network_type_error").innerHTML = "Please Select any Network Type!!!";
                status = false;
            }


            if (response.length == 0) {
                document.getElementById("g-recaptcha-error").innerHTML = 'Please Select the Captacha.';
                status = false;
            }

            function verifyCaptcha(token) {
                $recaptcha_response = token;
                document.getElementById("g-recaptcha-error").innerHTML = '';
            }

            return status;

        }

        // Patient Network Page Newsletter Email id validation
        function newsletter_form_validate() {
            let email = document.newsletter_form.newsletter_email.value;
            var status = false;


            if (email == "") {
                document.getElementById("newsletter_email_error").innerHTML = "Please enter your valid Email ID!!!";
                status = false;
            } else {
                document.getElementById("newsletter_email_error").innerHTML = "";
                status = true;
            }

            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                document.getElementById("newsletter_email_error").innerHTML = "Invalid Email Address!!!";
                status = false;
            }
            return status;
        }


        // Footer Email id validation
        function email_validate() {
            let email = document.subcribe_email.email_footer.value;
            var status = false;


            if (email == "") {
                document.getElementById("footer-form-error").innerHTML = "Please enter your valid Email ID!!!";
                status = false;
            } else {
                document.getElementById("footer-form-error").innerHTML = "";
                status = true;
            }

            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                document.getElementById("footer-form-error").innerHTML = "Invalid Email Address!!!";
                status = false;
            }
            return status;
        }
    </script>

    <header class="fixed-top veritas-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light wrapper top-nav" id="navbarMain">

            <!--  Show this only on mobile to medium screens  -->
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">              
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="img-fluid" />               
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse" id="toggle-collapse">

            </div>
            <!--  Use flexbox utility classes to change how the child elements are justified  -->
            <ul class="collapse navbar-collapse navbar-nav justify-content-end top-header" id="navbarToggle">
                <?php
                
                if (has_nav_menu('primary-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'walker' => new AWP_Menu_Walker(),   
                        'container' => '',                        
                        'items_wrap' => '%3$s'

                    ));
                }

                if (has_nav_menu('nav-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'nav-menu',                                              
                        'container' => '',    
                        'add_li_class' => 'd-lg-none',                
                        'items_wrap' => '%3$s'
                    ));
                }

                ?>               
            </ul>

            <!-- <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
            </li>  -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="aboutus.php" id="aboutus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
              <div class="dropdown-menu" aria-labelledby="aboutus">
                
                <a class="dropdown-item" href="aboutus.php#who-we-are">Who we are</a>
                <a class="dropdown-item" href="aboutus.php#vision-mission-sec">Vision & Mission</a>
                <a class="dropdown-item" href="aboutus.php#core-values-sec">Core values</a>
                <a class="dropdown-item" href="aboutus.php#our-team-expert-sec">Our Team</a> 
                <a class="dropdown-item" href="aboutus.php#become-patient-sec">Becoming a patient</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="services.php" id="services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
              <div class="dropdown-menu" aria-labelledby="services">
                    <a class="dropdown-item" href="colorectal.php">Colorectal </a>
                    <a class="dropdown-item" href="gastrointestinal.php">Upper Gastrointestinal Malignancies </a>
                    <a class="dropdown-item" href="gynecological.php">Gynecological Malignancies  </a>
                    <a class="dropdown-item" href="peritoneal.php">Peritoneal Surface Malignancies  </a>
                    <a class="dropdown-item" href="hepatobiliary.php">Hepatobiliary </a>
                    <a class="dropdown-item" href="breast.php"> Breast </a>
                    <a class="dropdown-item" href="head-and-neck.php"> Head And Neck   </a>
                    <a class="dropdown-item" href="thorax.php"> Thorax </a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="latest-procedure.php" id="latestprocedure" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Latest Procedures</a>
              <div class="dropdown-menu" aria-labelledby="latestprocedure">
                    <a class="dropdown-item" href="latest-procedure.php">Robotic Surgery </a>
                    <a class="dropdown-item" href="hipec.php">HIPEC </a>
                    <a class="dropdown-item" href="pipac.php">PIPAC  </a>
                    <a class="dropdown-item" href="fluorescence.php">Fluorescence-Guided Surgery</a>
                    <a class="dropdown-item" href="eras.php">ERAS </a> 
              </div>
            </li> -->
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link" href="latest-procedure.php">Latest Procedures</a>-->
            <!--</li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li> 
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="prevention.php">Prevention & Screening Clinics</a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="genetic.php">Genetic Testing & Counselling</a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="nutrition.php">Nutrition & Psychological Counselling</a> 
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="multidisciplinary.php">Multidisciplinary Treatment</a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="patient-network.php">Our Patient Network</a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="testimonals.php">Patient Testimonials</a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="careers.php">Careers</a>
            </li>
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="blog.php">Blog</a>
            </li> -->

            <!-- <div class="input-group">
            <input type="text" class="form-control" placeholder="Search this blog">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div> -->
            <form class="form-search">
                <input type="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>

        </nav>
        <!-- <nav class="navbar navbar-expand-lg bg-light justify-content-center wrapper bottom-header"> -->
        <nav class="navbar navbar-expand-lg bg-light justify-content-center wrapper bottom-header" id="navbarToggle1">

            <ul class="navbar-nav">

                <?php
                //  Display nav menu  
                if (has_nav_menu('nav-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'nav-menu',                    
                        'container' => '',                    
                        'items_wrap' => '%3$s'
                    ));
                }
                ?>
                <!-- <li class="nav-item">
                <a class="nav-link" href="prevention.php">Prevention & Screening Clinics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="genetic.php">Genetic Testing & Counselling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nutrition.php">Nutrition & Psychological Counselling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="multidisciplinary.php">Multidisciplinary Treatment</a>
            </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link" href="patient-network.php">Our Patient Network</a>
            </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link" href="testimonals.php">Patient Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="videos.php">Videos</a>
            </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link" href="careers.php">Careers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li> -->

            </ul>
        </nav>

    </header>