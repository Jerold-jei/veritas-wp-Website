<?php 


function fn_customizer_settings($wp_customizer){
 
    // add Footer Content

    $wp_customizer->add_section('address_details_section', array(
        'title' => __('Footer Address Details', 'Veritas'),
        'priority' => 30,
    ));
    //Footer Image
    $wp_customizer->add_setting('footer_image', array(
        'transport' => 'refresh',
    ));
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'footer_image', array(
        'label' => __('Footer Image', 'Veritas'),
        'section' => 'address_details_section',
        'settings' => 'footer_image',
    )));   

    // Add Footer Contact column

    $wp_customizer->add_setting('footer_contact_column',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_contact_column_control',array(
        'label' => __('Change Column Name', 'Veritas'),
        'description' => 'Change Column Name',
        'section' => 'address_details_section',
        'settings' => 'footer_contact_column'

    ));

    // Add Footer Contact Phone

    $wp_customizer->add_setting('footer_contact_column_phone',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_contact_column_phone_control',array(
        'label' => __('Change Phone Number', 'Veritas'),
        'description' => 'Change Phone Number',
        'section' => 'address_details_section',
        'settings' => 'footer_contact_column_phone'
    ));

    // Add Footer Contact Address Label

    $wp_customizer->add_setting('footer_contact_column_address_label',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_contact_column_address_label_control',array(
        'label' => __('Change Address Label', 'Veritas'),
        'description' => 'Change Address Label',
        'section' => 'address_details_section',
        'settings' => 'footer_contact_column_address_label'
    ));

    // Add Footer Contact Address

    $wp_customizer->add_setting('footer_contact_column_address',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_contact_column_address_control',array(
        'label' => __('Change the Address', 'Veritas'),
        'description' => 'Change the Address',
        'section' => 'address_details_section',
        'settings' => 'footer_contact_column_address'
    ));

    // Add Footer Contact Email

    $wp_customizer->add_setting('footer_contact_column_email_label',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_contact_column_email_label_control',array(
        'label' => __('Change the Email Label', 'Veritas'),
        'description' => 'Change the Email Label',
        'section' => 'address_details_section',
        'settings' => 'footer_contact_column_email_label'
    ));
 
    // Add Footer Contact Email ID

    $wp_customizer->add_setting('footer_contact_column_email',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_contact_column_email_control',array(
        'label' => __('Change the Email ID', 'Veritas'),
        'description' => 'Change the Email ID',
        'section' => 'address_details_section',
        'settings' => 'footer_contact_column_email'
    ));

    // Add Footer Subscribe Text

    $wp_customizer->add_setting('footer_subscribe_text',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_subscribe_text_control',array(
        'label' => __('Change the Text', 'Veritas'),
        'description' => 'Change the Text',
        'section' => 'address_details_section',
        'settings' => 'footer_subscribe_text'
    ));

    // Add Footer Second Column heading

    $wp_customizer->add_setting('footer_second_column_heading',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_second_column_heading_control',array(
        'label' => __('Change the Second Column Title', 'Veritas'),
        'description' => 'Change the Second Column Title',
        'section' => 'address_details_section',
        'settings' => 'footer_second_column_heading'
    ));

    // Add Footer Third Column heading

    $wp_customizer->add_setting('footer_third_column_heading',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_third_column_heading_control',array(
        'label' => __('Change the Third Column Title', 'Veritas'),
        'description' => 'Change the Third Column Title',
        'section' => 'address_details_section',
        'settings' => 'footer_third_column_heading'
    ));

    // Add Footer Fourth Column heading

    $wp_customizer->add_setting('footer_fourth_column_heading',array(
        // 'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('footer_fourth_column_heading_control',array(
        'label' => __('Change the Fourth Column Title', 'Veritas'),
        'description' => 'Change the Fourth Column Title',
        'section' => 'address_details_section',
        'settings' => 'footer_fourth_column_heading'
    ));


    //Social Links SECTION

    $wp_customizer->add_section('social_links_section', array(
        'title' => __('Social Media Links Section', 'veritas'),
        'priority' => 30,
    ));

    //Follow Us Link
    $wp_customizer->add_setting('follow_us_text', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('follow_us_text', array(
        'label' => 'Follow us',
        'section' => 'social_links_section',
        'type' => 'text',
    ));


    //FaceBook Link
    $wp_customizer->add_setting('facebook_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('facebook_link', array(
        'label' => 'Facebook Link',
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    //Instagram Link
    $wp_customizer->add_setting('instagram_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('instagram_link', array(
        'label' => 'Instagram Link',
        'section' => 'social_links_section',
        'type' => 'text',
    ));


    //Linkedin Link
    $wp_customizer->add_setting('linkedin_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('linkedin_link', array(
        'label' => 'Linkedin Link',
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    //Youtube Link
    $wp_customizer->add_setting('youtube_link', array(

        'transport' => 'refresh',
    ));

    $wp_customizer->add_control('youtube_link', array(
        'label' => 'Youtube Link',
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    

    // add Foooter copy rights field

    $wp_customizer->add_setting('copy_rights_field',array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('copy_rights_control',array(
        'label' => __('Change Copy Rights', 'Veritas'),
        'description' => 'Change Copy Rights',
        'section' => 'header',
        'settings' => 'copy_rights_field'

    ));

    // add Foooter copy rights label field

    $wp_customizer->add_setting('copy_rights_label_field',array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));

    $wp_customizer->add_control('copy_rights_label_control',array(
        'label' => __('Change Copy Rights Label', 'Veritas'),
        'description' => 'Change Copy Rights Label',
        'section' => 'header',
        'settings' => 'copy_rights_label_field'

    ));

}

add_action('customize_register','fn_customizer_settings');
