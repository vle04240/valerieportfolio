<?php
//required for auto embeds
if ( ! isset( $content_width ) ) $content_width = 784;

//required since 4.1
add_theme_support( 'title-tag' );

add_theme_support('post-thumbnails');

add_theme_support( 'html5', array('search-form', 'comment-form', 'gallery', 'caption', 'comment-list' ) );


/**
 * Menu Areas
 * Registers two menu areas
 * Display them in your theme with wp_nav_menu
 */

add_action( 'init', 'awesome_menus' );
function awesome_menus(){
	register_nav_menus( array(
			// 'code_name' => 'human readable'
			'main_nav' => 'Main Navigation Area',
			'contact' => 'Contact Links'
		) );
}
//no close