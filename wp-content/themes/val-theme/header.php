<!DOCTYPE html>
<html <?php language_attributes ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="portfolio" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="path/to/css/reset.css" media="screen" />
	<link rel="stylesheet" href="path/to/css/style.css" media="screen" />
</head>
<body <?php body_class(  ); ?>>
	<header>
		<h1 class="val-port"><a href="index.php">Valeries Portfolio</a></h1>
		<h2>Site Description</h2>
		<nav>
			<ul class="nav">
				<li><a href="index.php">About</a></li>
				<li><a href="resume.php">Resume</a></li>
				<li><a href="archive.php">Portfolio</a></li>
				<li><a href="contact.php">Contact</a></li>
				/*<li><a href="/gallery/">Photography</a></li>
				<li><a href="/blog/">Video</a></li>*/
			</ul>
		</nav>	
	</header>
 
	