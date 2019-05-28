<?php
define('STORYCAT_VERSION', '1.0.1');

function load_script(){

	wp_enqueue_style('storyCat-style', get_stylesheet_uri(), [Bootstrap], STORYCAT_VERSION, 'all');
	wp_enqueue_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script('storyCat_jquery', get_theme_file_uri('storycat.js'), [], STORYCAT_VERSION, true);

}

add_action('wp_enqueue_scripts', load_script);


