 <?php

function pipe_script_enqueue(){
	//css

	wp_enqueue_style('bootstrapmin', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.2.1');
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/pipe.css', array(), '1.0.0');
	//js
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.2.1', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/pipe.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery', true);

}

add_action( 'wp_enqueue_scripts', 'pipe_script_enqueue');

function pipe_theme_setup(){

	add_theme_support('menus');
	register_nav_menu( 'primary', 'Primary Header Navigation');
	register_nav_menu( 'secondary', 'Footer Navigation');
}

add_action('init', 'pipe_theme_setup');

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array('aside', 'image', 'video') );
