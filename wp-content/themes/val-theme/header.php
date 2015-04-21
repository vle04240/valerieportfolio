<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(' :: ', 1, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
	<?php wp_head();//required hook ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1 class="head-font"><a href="index.php"><?php bloginfo( 'title' ); ?></a></h1> 
		<h2><?php bloginfo( 'description' ); ?></h2>
		

	</header>
<!--  
	<nav>
			<ul class="nav">
				<li class="circle"><a href="index.php">About</a></li>
				<li class="circle"><a href="resume.php">Resume</a></li>
				<li class="circle"><a href="archive.php">Portfolio</a></li>
				<li class="circle"><a href="contact.php">Contact</a></li>
				<li><a href="/gallery/">Photography</a></li>
				<li><a href="/blog/">Video</a></li> 
			</ul>
	</nav> -->

	<?php
		wp_nav_menu( array(
			'theme_location' => 'main_nav',
			'container' => 'nav',
			'menu_class' => 'nav',
			'fallback_cb' => '',
	
		)); ?>