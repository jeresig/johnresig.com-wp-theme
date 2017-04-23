<?php

function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

function register_contact_menu() {
  register_nav_menu('contact-menu',__( 'Contact Menu' ));
}
add_action( 'init', 'register_contact_menu' );

add_theme_support( 'custom-logo', array(
	'height'      => 48,
	'width'       => 48,
	'flex-height' => false,
	'flex-width'  => false,
) );

add_image_size( 'custom-logo-size', 48, 48 );

?>