<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Slow Travel
 * @since Slow Travel v0.1
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

<div class="wrap-all">
	
<div class="header">
	<div id="logo">
	 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ) ?>">
	 <img src="<?php echo get_template_directory_uri() .'/assets/images/logo.jpg'; ?>" id="logo-img" />
	 </a>
	</div>

	<div class="header-sider">
		<div class="search-bar">
			  <?php get_search_form( true ); ?>
		</div>

		<div class="login-bar">
			<?php get_sidebar( 'loginbar' ); ?>
		</div>
	</div>
	
	<div class="slogan">

	</div>
	
</div>
