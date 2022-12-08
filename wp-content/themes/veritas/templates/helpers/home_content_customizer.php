<?php
// home page content funtion

function fn_home_content_customizer_settings($wp_customizer)
{
    // add customizer setting
    // add banner section swiper
    $wp_customizer->add_section('home_banner_swiper', array(
        'title' => __('Home Banner Swiper Settings', 'Veritas'),
        'priority' => 70
    ));

    // add first swiper title

    $wp_customizer->add_setting('first_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('first_swiper_title_control', array(
        'label' => __('First Swiper Title', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'first_swiper_title'

    ));

    // add first swiper Description

    $wp_customizer->add_setting('first_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('first_swiper_description_control', array(
        'label' => __('First Swiper Description', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'first_swiper_description'

    ));

    // add Second swiper title

    $wp_customizer->add_setting('second_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('second_swiper_title_control', array(
        'label' => __('Second Swiper Title', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'second_swiper_title'

    ));

    // add Second swiper Description

    $wp_customizer->add_setting('second_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('second_swiper_description_control', array(
        'label' => __('Second Swiper Description', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'second_swiper_description'

    ));

    // add Third swiper title

    $wp_customizer->add_setting('third_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('third_swiper_title_control', array(
        'label' => __('Third Swiper Title', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'third_swiper_title'

    ));

    // add Third swiper Description

    $wp_customizer->add_setting('third_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('third_swiper_description_control', array(
        'label' => __('Third Swiper Description', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'third_swiper_description'

    ));

    // add Fourth swiper title

    $wp_customizer->add_setting('fourth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('fourth_swiper_title_control', array(
        'label' => __('Fourth Swiper Title', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'fourth_swiper_title'

    ));

    // add Fourth swiper Description

    $wp_customizer->add_setting('fourth_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('fourth_swiper_description_control', array(
        'label' => __('Fourth Swiper Description', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'fourth_swiper_description'

    ));

    // add Fourth swiper title

    $wp_customizer->add_setting('fourth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('fourth_swiper_title_control', array(
        'label' => __('Fourth Swiper Title', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'fourth_swiper_title'

    ));

    // add Let's get started

    $wp_customizer->add_setting('lets_get_started', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('lets_get_started_control', array(
        'label' => __('Lets Get Started Text', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'lets_get_started'
    ));

    // add Make an Appointment

    $wp_customizer->add_setting('make_an_appointment', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('make_an_appointment_control', array(
        'label' => __('Make an Appointment Text', 'Veritas'),
        'section' => 'home_banner_swiper',
        'settings' => 'make_an_appointment'
    ));

    // add Home page About us section
    $wp_customizer->add_section('home_about_us_section', array(
        'title' => __('Home Page About us Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home page About us section title

    $wp_customizer->add_setting('about_us_section_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('about_us_section_title_control', array(
        'label' => __('About us Section Title', 'Veritas'),
        'section' => 'home_about_us_section',
        'settings' => 'about_us_section_title'

    ));

    // add Home page About us section Description

    $wp_customizer->add_setting('about_us_section_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('about_us_section_description_control', array(
        'label' => __('About us Section Description', 'Veritas'),
        'section' => 'home_about_us_section',
        'settings' => 'about_us_section_description'

    ));

    // add Home Page Services section Swiper
    $wp_customizer->add_section('home_services_section_swiper', array(
        'title' => __('Home Page Services Section Swiper Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home Page Services section Swiper title

    $wp_customizer->add_setting('home_services_section_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_swiper_title_control', array(
        'label' => __('Home Page Services Section Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_swiper_title'

    ));

    // add Home Page Services section First Swiper title

    $wp_customizer->add_setting('home_services_section_first_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_first_swiper_title_control', array(
        'label' => __('Home Page Services Section First Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_first_swiper_title'

    ));

    // add Home Page Services section First Swiper Description

    $wp_customizer->add_setting('home_services_section_first_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_first_swiper_description_control', array(
        'label' => __('Home Page Services Section First Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_first_swiper_description'

    ));

    // add Home Page Services section Second Swiper title

    $wp_customizer->add_setting('home_services_section_second_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_second_swiper_title_control', array(
        'label' => __('Home Page Services Section Second Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_second_swiper_title'
    ));

    // add Home Page Services section Second Swiper Description

    $wp_customizer->add_setting('home_services_section_second_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_second_swiper_description_control', array(
        'label' => __('Home Page Services Section Second Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_second_swiper_description'
    ));

    // add Home Page Services section Third Swiper title

    $wp_customizer->add_setting('home_services_section_third_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_third_swiper_title_control', array(
        'label' => __('Home Page Services Section Third Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_third_swiper_title'

    ));

    // add Home Page Services section Third Swiper Description

    $wp_customizer->add_setting('home_services_section_third_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_third_swiper_description_control', array(
        'label' => __('Home Page Services Section Third Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_third_swiper_description'

    ));

    // add Home Page Services section Fourth Swiper title

    $wp_customizer->add_setting('home_services_section_fourth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_fourth_swiper_title_control', array(
        'label' => __('Home Page Services Section Fourth Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_fourth_swiper_title'
    ));

    // add Home Page Services section Fourth Swiper Description

    $wp_customizer->add_setting('home_services_section_fourth_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_fourth_swiper_description_control', array(
        'label' => __('Home Page Services Section Fourth Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_fourth_swiper_description'
    ));

    // add Home Page Services section Fivth Swiper title

    $wp_customizer->add_setting('home_services_section_fivth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_fivth_swiper_title_control', array(
        'label' => __('Home Page Services Section Fivth Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_fivth_swiper_title'

    ));

    // add Home Page Services section Fivth Swiper Description

    $wp_customizer->add_setting('home_services_section_fivth_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_fivth_swiper_description_control', array(
        'label' => __('Home Page Services Section Fivth Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_fivth_swiper_description'

    ));

    // add Home Page Services section Sixth Swiper title

    $wp_customizer->add_setting('home_services_section_sixth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_sixth_swiper_title_control', array(
        'label' => __('Home Page Services Section Sixth Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_sixth_swiper_title'

    ));

    // add Home Page Services section Sixth Swiper Description

    $wp_customizer->add_setting('home_services_section_sixth_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_sixth_swiper_description_control', array(
        'label' => __('Home Page Services Section Sixth Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_sixth_swiper_description'

    ));

    // add Home Page Services section Seventh Swiper title

    $wp_customizer->add_setting('home_services_section_seventh_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_seventh_swiper_title_control', array(
        'label' => __('Home Page Services Section Seventh Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_seventh_swiper_title'
    ));

    // add Home Page Services section Seventh Swiper Description

    $wp_customizer->add_setting('home_services_section_seventh_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_seventh_swiper_description_control', array(
        'label' => __('Home Page Services Section Seventh Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_seventh_swiper_description'
    ));

    // add Home Page Services section Eighth Swiper title

    $wp_customizer->add_setting('home_services_section_eighth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_eighth_swiper_title_control', array(
        'label' => __('Home Page Services Section Eighth Swiper Title', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_eighth_swiper_title'

    ));

    // add Home Page Services section Eighth Swiper Description

    $wp_customizer->add_setting('home_services_section_eighth_swiper_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_services_section_eighth_swiper_description_control', array(
        'label' => __('Home Page Services Section Eighth Swiper Description', 'Veritas'),
        'section' => 'home_services_section_swiper',
        'settings' => 'home_services_section_eighth_swiper_description'

    ));

    // add Home page Why Choose us section
    $wp_customizer->add_section('home_why_choose_us_section', array(
        'title' => __('Home Page Why Choose us Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home page Why Choose us section title

    $wp_customizer->add_setting('why_choose_us_section_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_title_control', array(
        'label' => __('Why Choose us Section Title', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_title'

    ));

    // add Home page Why Choose us section Description

    $wp_customizer->add_setting('why_choose_us_section_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_description_control', array(
        'label' => __('Why Choose us Section Description', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_description'

    ));

    // add Home page Why Choose us section Quote

    $wp_customizer->add_setting('why_choose_us_section_quote', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_quote_control', array(
        'label' => __('Why Choose us Section Quote', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_quote'

    ));

    // add Home page Why Choose us section First Para

    $wp_customizer->add_setting('why_choose_us_section_first_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_first_para_control', array(
        'label' => __('Why Choose us Section First Para', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_first_para'

    ));

    // add Home page Why Choose us section Second Para 

    $wp_customizer->add_setting('why_choose_us_section_second_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_second_para_control', array(
        'label' => __('Why Choose us Section Second Para', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_second_para'

    ));

    // add Home page Why Choose us section Third Para 

    $wp_customizer->add_setting('why_choose_us_section_third_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_third_para_control', array(
        'label' => __('Why Choose us Section Third Para', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_third_para'

    ));

    // add Home page Why Choose us section Fourth Para 

    $wp_customizer->add_setting('why_choose_us_section_fourth_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_fourth_para_control', array(
        'label' => __('Why Choose us Section Fourth Para', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_fourth_para'

    ));

    // add Home page Why Choose us section Fivth Para 

    $wp_customizer->add_setting('why_choose_us_section_fivth_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_fivth_para_control', array(
        'label' => __('Why Choose us Section Fivth Para', 'Veritas'),
        'section' => 'home_why_choose_us_section',
        'settings' => 'why_choose_us_section_fivth_para'

    ));

    // add Home page Latest Procedure section
    $wp_customizer->add_section('home_latest_procedure_section', array(
        'title' => __('Home Page Latest Procedure section Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home page Latest Procedure section title

    $wp_customizer->add_setting('home_latest_procedure_section_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('why_choose_us_section_title_control', array(
        'label' => __('Latest Procedure Section Title', 'Veritas'),
        'section' => 'home_latest_procedure_section',
        'settings' => 'home_latest_procedure_section_title'

    ));

    // add Home page Latest Procedure section First Swiper Title

    $wp_customizer->add_setting('home_latest_procedure_section_first_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_latest_procedure_section_first_swiper_title_control', array(
        'label' => __('Latest Procedure Section First Swiper Title', 'Veritas'),
        'section' => 'home_latest_procedure_section',
        'settings' => 'home_latest_procedure_section_first_swiper_title'

    ));

    // add Home page Latest Procedure section Second Swiper Title

    $wp_customizer->add_setting('home_latest_procedure_section_second_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_latest_procedure_section_second_swiper_title_control', array(
        'label' => __('Latest Procedure Section Second Swiper Title', 'Veritas'),
        'section' => 'home_latest_procedure_section',
        'settings' => 'home_latest_procedure_section_second_swiper_title'

    ));

    // add Home page Latest Procedure section Third Swiper Title

    $wp_customizer->add_setting('home_latest_procedure_section_third_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_latest_procedure_section_third_swiper_title_control', array(
        'label' => __('Latest Procedure Section Third Swiper Title', 'Veritas'),
        'section' => 'home_latest_procedure_section',
        'settings' => 'home_latest_procedure_section_third_swiper_title'

    ));

    // add Home page Latest Procedure section Fourth Swiper Title

    $wp_customizer->add_setting('home_latest_procedure_section_fourth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_latest_procedure_section_fourth_swiper_title_control', array(
        'label' => __('Latest Procedure Section Fourth Swiper Title', 'Veritas'),
        'section' => 'home_latest_procedure_section',
        'settings' => 'home_latest_procedure_section_fourth_swiper_title'

    ));

    // add Home page Latest Procedure section Fivth Swiper Title

    $wp_customizer->add_setting('home_latest_procedure_section_fivth_swiper_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_latest_procedure_section_fivth_swiper_title_control', array(
        'label' => __('Latest Procedure Section Fivth Swiper Title', 'Veritas'),
        'section' => 'home_latest_procedure_section',
        'settings' => 'home_latest_procedure_section_fivth_swiper_title'

    ));


    // add Home page Becoming a Patient section
    $wp_customizer->add_section('home_becoming_patient_section', array(
        'title' => __('Home Page Becoming a Patient Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home page Becoming a Patient section title

    $wp_customizer->add_setting('becoming_patient_section_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('becoming_patient_section_title_control', array(
        'label' => __('Becoming a Patient Section Title', 'Veritas'),
        'section' => 'home_becoming_patient_section',
        'settings' => 'becoming_patient_section_title'

    ));

    // add Home page Becoming a Patient section Description

    $wp_customizer->add_setting('becoming_patient_section_description', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('becoming_patient_section_description_control', array(
        'label' => __('Becoming a Patient Section Description', 'Veritas'),
        'section' => 'home_becoming_patient_section',
        'settings' => 'becoming_patient_section_description'

    ));

    // add Home page Prevention section
    $wp_customizer->add_section('home_prevention_section', array(
        'title' => __('Home Page Prevention Section Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home page Prevention section title

    $wp_customizer->add_setting('home_prevention_section_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_prevention_section_title_control', array(
        'label' => __('Home Page Prevention Section Title', 'Veritas'),
        'section' => 'home_prevention_section',
        'settings' => 'home_prevention_section_title'

    ));

    // add Home page Prevention section First Para

    $wp_customizer->add_setting('home_prevention_section_first_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_prevention_section_first_para_control', array(
        'label' => __('Home Page Prevention Section First Para', 'Veritas'),
        'section' => 'home_prevention_section',
        'settings' => 'home_prevention_section_first_para'

    ));

    // add Home page Prevention section Second Para

    $wp_customizer->add_setting('home_prevention_section_second_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_prevention_section_second_para_control', array(
        'label' => __('Home Page Prevention Section Second Para', 'Veritas'),
        'section' => 'home_prevention_section',
        'settings' => 'home_prevention_section_second_para'

    ));

    // add Home page Prevention section Third Para

    $wp_customizer->add_setting('home_prevention_section_third_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_prevention_section_third_para_control', array(
        'label' => __('Home Page Prevention Section Third Para', 'Veritas'),
        'section' => 'home_prevention_section',
        'settings' => 'home_prevention_section_third_para'

    ));

     // add Home page Screening Clinics section
     $wp_customizer->add_section('home_screening_clinics_section', array(
        'title' => __('Home Page Screening Clinics Section Settings', 'Veritas'),
        'priority' => 70
    ));

    // add Home page  Screening Clinics section title

    $wp_customizer->add_setting('home_screening_clinics_section_title', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_screening_clinics_section_title_control', array(
        'label' => __('Home Page  Screening Clinics Section Title', 'Veritas'),
        'section' => 'home_screening_clinics_section',
        'settings' => 'home_screening_clinics_section_title'

    ));

    // add Home page Screening Clinics section First Para

    $wp_customizer->add_setting('home_screening_clinics_section_first_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_screening_clinics_section_first_para_control', array(
        'label' => __('Home Page  Screening Clinics Section First Para', 'Veritas'),
        'section' => 'home_screening_clinics_section',
        'settings' => 'home_screening_clinics_section_first_para'

    ));

    // add Home page Screening Clinics section Second Para

    $wp_customizer->add_setting('home_screening_clinics_section_second_para', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('home_screening_clinics_section_second_para_control', array(
        'label' => __('Home Page  Screening Clinics Section Second Para', 'Veritas'),
        'section' => 'home_screening_clinics_section',
        'settings' => 'home_screening_clinics_section_second_para'

    ));
}

add_action('customize_register', 'fn_home_content_customizer_settings');
