<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Slow Travel
 * @since Slow Travel
 */
?><!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo( 'name' ); ?>
	</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>

<div class="header">
	<div id="logo">
	 <?php bloginfo( 'name' ) ?>
	</div>

<div class="header-sider">
	<div class="search-bar">
		<?php 
		get_sidebar( 'search' );
		 ?>
	</div>

	<div class="login-bar">
		<?php get_sidebar( 'loginbar' ); ?>
	</div>
</div>
	
	
</div>
