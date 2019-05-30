<?php
define('STORYCAT_VERSION', '1.0.1');

// Load Scripts
function load_script(){

	wp_enqueue_style('storyCat-style', get_stylesheet_uri(), [Bootstrap], STORYCAT_VERSION, 'all');
	wp_enqueue_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script('storyCat_jquery', get_theme_file_uri('assets/js/storycat.js'), ['jquery'], STORYCAT_VERSION, true);

}
add_action('wp_enqueue_scripts', load_script);

//
function storycat_setup(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', storycat_setup);

add_filter('image_size_names_choose', 'add_custom_thumb');

// CUSTUM IMG
function add_custom_thumb($sizes) {
$addsizes = array(
				"single-thumb" => __( "Exemple")
		);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}
