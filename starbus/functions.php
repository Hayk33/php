<?php
function bootstrap_setup(){
	
	load_theme_textdomain('bootstrap');
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
			'height' => 31,
			'width' => 134,
			'flex-height' => true
			));
}
add_action('after_setup_theme', 'bootstrap_setup');









// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function bootstrap_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-theme.css' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );



function bootstrap_customize_register( $wp_customize ){
	$wp_customize->add_setting('header_social' , array(
		'default' => __('Footer Text', 'bootstrap'),
		'transport' => 'refresh',
		));
	$wp_customize->add_section('social_section', array(
		'title' => __('Social settings', 'bootstrap'),
		'priority' => 30,
		));



	$wp_customize->add_control(
		'header_social', 
		array(
	'label'      => __( 'Social header in footer', 'bootstrap' ),
	'section'    => 'social_section',
	'settings'   => 'header_social',
	'type' => 'text',
		));









	$wp_customize->add_setting('header2_social' , array(
		'default' => __('Footer Text', 'bootstrap'),
		'transport' => 'refresh',
		));
	$wp_customize->add_section('social_section', array(
		'title' => __('Social settings', 'bootstrap'),
		'priority' => 30,
		));



	$wp_customize->add_control(
		'header2_social', 
		array(
	'label'      => __( 'Social header in footer2', 'bootstrap' ),
	'section'    => 'social_section',
	'settings'   => 'header2_social',
	'type' => 'text',
		));







}

add_action( 'customize_register', 'bootstrap_customize_register' );



?>