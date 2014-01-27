<?php

// Theme paths constants
define( 'THEMEPATH', get_bloginfo( 'stylesheet_directory' ) );
define( 'IMAGES', THEMEPATH. "/images" );

// Register Nav Menu
add_theme_support( 'nav-menus' );
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main' => 'Main Nav'
		)
	);
}
?>
