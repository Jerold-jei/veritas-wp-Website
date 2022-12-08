<?php

include_once('templates/helpers/customizer.php');
include_once('templates/helpers/content_customizer.php');
include_once('templates/helpers/home_content_customizer.php');


function load_stylesheets()

{
    // wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false,'all');
    // wp_enqueue_style('bootstrap');


   // wp_register_style('style', get_template_directory_uri().'/css/style.css', array(), false,'all');

    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(), false, 'all');

    wp_enqueue_style('style123',get_template_directory_uri().'/style.css',array(), false, 'all');

}
add_action('wp_enqueue_scripts','load_stylesheets');

// Add js files

function loadjs(){

    // echo get_template_directory_uri();die();

    // wp_register_script('customjs', get_template_directory_uri().'/js/script.js', '',1, true);
    // wp_enqueue_script('customjs');


    wp_enqueue_script( 'customjs', get_template_directory_uri().'/js/script.js', array(), '1.0001', true );


    // wp_register_script('customjs', get_template_directory_uri().'/js/build-app.js', '',1, true);
    // wp_enqueue_script('customjs');

    wp_enqueue_script( 'customjs123', get_template_directory_uri().'/js/build-app.js', array(), '1.0001', true );   

}
add_action('wp_enqueue_scripts','loadjs');



// add some new features in wordpress

function fn_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array('search-form'));
    add_theme_support('custom-logo');
    add_theme_support('video');
}

add_action('after_setup_theme', 'fn_theme_supports');


// Register nav menu

function fn_nav_menu(){
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'text_domain'),
        'nav-menu' => __('Navbar', 'text_domain'),
        'footer-menu' => __('Footer First Menu','text_domain'),
        'footer-second-menu' => __('Footer Second Menu','text_domain'),
        'footer-third-menu' => __('Footer Third Menu','text_domain')
    ));
}

add_action('init','fn_nav_menu');

function theme_slug_setup_theme() {
    add_theme_support( 'custom-header', array( 
        'video' => true,
    ) );
}

add_action( 'after_setup_theme', 'theme_slug_setup_theme' );


function add_link_atts($atts)
{
    $atts['class'] = 'nav-item nav-link';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_link_atts');


class AWP_Menu_Walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= "<li class='" .  implode(" ", $item->classes) . "'>";
 
		if ($item->url && $item->url != '#') {
			$output .= '<a class="nav-item nav-link " href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
 
		if ($args->walker->has_children) {			
            $output .='   <a class="nav-link dropdown-toggle" href="' . $item->url . '" data-toggle="dropdown" ></a>';
		}
	}
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


