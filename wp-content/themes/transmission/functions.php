<?php

function enqueue_styles_scripts () {
	wp_register_style('mainstyle', get_template_directory_uri().'/style.css');
	wp_enqueue_style( 'mainstyle');

	wp_register_style('sliderstyle', get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
	wp_enqueue_style( 'sliderstyle');

	wp_register_script('swiper-slider', get_template_directory_uri().'/assets/js/swiper-bundle.min.js');
	wp_enqueue_script('swiper-slider');
	
	wp_register_script('swiper-slider-start', get_template_directory_uri().'/assets/js/swiper-start.js');
	wp_enqueue_script('swiper-slider-start');
	
	wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js.js');
	wp_enqueue_script('jquery');

	wp_register_script('form-service', get_template_directory_uri().'/assets/js/form-service-calc.js');
	wp_enqueue_script('form-service');

	wp_register_script('form-question', get_template_directory_uri().'/assets/js/form-question.js');
	wp_enqueue_script('form-question');
}

add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');