<?php
// Add banner image

function fn_content_customizer_settings($wp_customizer)
{

    // add customizer setting
    // include new section
    $wp_customizer->add_section('header', array(
        'title' => __('Header Settings', 'Veritas'),
        'priority' => 70
    ));

    // allow us to add capability to the customizer setting
    $wp_customizer->add_setting('header_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer settings
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label' => __('Header Image', 'Veritas'),
        'section' => 'header'
    )));

    // add header text

    $wp_customizer->add_setting('header_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('header_text_control', array(
        'label' => __('Header Text', 'Veritas'),
        'description' => 'Change Header text',
        'section' => 'header',
        'settings' => 'header_text_field'

    ));

    // add header description field

    $wp_customizer->add_setting('header_desc_field', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('header_description_control', array(
        'label' => __('Header Description', 'Veritas'),
        'description' => 'Change Header Description',
        'section' => 'header',
        'settings' => 'header_desc_field'

    ));

    //Youtube Video links

    $wp_customizer->add_section('youtube_links_section', array(
        'title' => __('Youtube Links Section', 'veritas'),
        'priority' => 30,
    ));

    //Youtube First Video link
    $wp_customizer->add_setting('youtube_first_video_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('youtube_first_video_link', array(
        'label' => 'Youtube First Video Link',
        'section' => 'youtube_links_section',
        'type' => 'text',
    ));

    //Youtube Second Video link
    $wp_customizer->add_setting('youtube_second_video_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('youtube_second_video_link', array(
        'label' => 'Youtube Second Video Link',
        'section' => 'youtube_links_section',
        'type' => 'text',
    ));

    //Youtube Third Video link
    $wp_customizer->add_setting('youtube_third_video_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('youtube_third_video_link', array(
        'label' => 'Youtube Third Video Link',
        'section' => 'youtube_links_section',
        'type' => 'text',
    ));

    
}

add_action('customize_register', 'fn_content_customizer_settings');
