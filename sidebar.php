<div class="side">
	
<?php if ( is_active_sidebar( 'main-side' ) ) : ?>
	<div id="widget-area" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'main-side' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>

</div>