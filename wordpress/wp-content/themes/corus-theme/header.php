<?php
/**
* Template Name: Header
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Corus WP Exercise</title>
	<?php wp_head(); ?>
</head>
<body>
	<!-- website background wrapper -->
	<div class="main-website-wrapper">
		<!-- start of nav -->
		<nav id="main-nav-wrapper">
			<div class="main-nav-links">
				<ul class="main-nav-links-list">
					<li class="main-nav-link-item"><a class="main-nav-links" href="<?php echo site_url('/home/') ?>">Home</a></li>
					<li class="main-nav-link-item"><a class="main-nav-links" href="<?php echo site_url('/gallery/') ?>">Gallery</a></li>
					<li class="main-nav-link-item"><a class="nav-main-links" href="<?php echo site_url('/contact/') ?>">Contact</a></li>		
				</ul>
			</div>
		</nav>
		<!-- end of nav -->

		<!-- start of header -->
		<header id="main-header-wrapper">
			<div class="header-images" id="main-header-images">
				<!-- <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/header-backgrounds/img-surfing-abigail-lynn.jpg" alt="colourful surfing boards" width="50%"/> -->
			</div>				
		</header>		
		<!-- start of main in home.php -->