<div class="side main-side">
	<div class="side-top-bar">
	</div>
	<?php if ( is_active_sidebar( 'main-side' ) ) : ?>
		<div id="widget-area" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'main-side' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<div class="side-adsssss">
		 <img src="<?php echo get_template_directory_uri() .'/assets/images/ads.png'; ?>" />
	</div>
</div>