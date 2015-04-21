<?php
/*
Plugin Name: Portfolio Pieces
Description: Adds the ability to have portfolio pieces
Author: Valerie Esposito
Version: 0.1
License: GPLv3
*/

/**
* Register 'product' post type
*/

add_action( 'init', 'sd_portfolio_setup' );
function sd_portfolio_setup(){
	register_post_type( 'portfolio_piece', array(
		'public'  	  		=> true,
		'has_archive' 		=> true,
		'menu_position' 	=> 8,
		'supports'	 		=> array( 'title', 'editor', 'thumbnail', 'excerpt', ),
		'labels' 		 	=> array(
			//These will show up in the admin panel
			'name'		 	=> 'Portfolio Pieces',
			'singular_name' => 'Portfolio Piece',
			'add_new_item'  => 'Add New Piece',
			'not_found' 	=> 'No Piece Found',
			),
		) );
}