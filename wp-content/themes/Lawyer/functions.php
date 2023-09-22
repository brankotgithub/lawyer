<?php

/* 
 include css function
 */
function lawyer_style (){
    
    wp_enqueue_style('Owl Carousel', get_template_directory_uri().'/Frontend/css/owl.carousel.css', array(), 'v2.3.4');
    wp_enqueue_style('Carousel Theme', get_template_directory_uri().'/Frontend/css/owl.theme.default.css', array('Owl Carousel'), 'v2.3.4');        
    wp_enqueue_style('Theme', get_template_directory_uri().'/Frontend/css/theme.css', array(), 'v.1.0');  
    wp_enqueue_style('Style', get_template_directory_uri().'/style.css', array(), 'v.1.0');
     
}

add_action('wp_enqueue_scripts', 'lawyer_style');

function lawyer_scripts (){
    wp_enqueue_script('jQuery', get_template_directory_uri().'/Frontend/js/jquery.min.js', array(), 'v3.4.1', true);
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri().'/Frontend/js/bootstrap.bundle.min.js', array('jQuery'), 'v4.3.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array(), '5', true);    
    wp_enqueue_script('Owl Carousel js', get_template_directory_uri().'/frontend/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true); 
    wp_enqueue_script('Main js', get_template_directory_uri().'/frontend/js/main.js', array('jQuery'), '1,0', true);
             
}

add_action('wp_enqueue_scripts', 'lawyer_scripts');

function lawyer_support (){
    
    //titlr support
    add_theme_support( 'title-tag' );
    
    //logo support
    add_theme_support( 'custom-logo', array (
                'height'               => 28,
		'width'                => 88,
		'flex-height'          => false,
		'flex-width'           => false
		/*'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, */
         
    ));
    
    //featured picture dupport
    add_theme_support( 'post-thumbnails' );
    
    //add image suport
    add_image_size( 'news_list', 463, 307, true );
    
    //menu support
    register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Menu' )
     )
   );
 
}
    

add_action('after_setup_theme', 'lawyer_support');
add_action('init', 'lawyer_support');