<?php get_header(); ?>


<?php if(is_home()): ?>

<?php 
get_template_part( "home",'slider' );
 ?>

<?php endif ?>
	
	<div class="wrap">
		<div class="main-toolbar">
				<a href="" class="add-new-btn">
					<img src="<?php echo get_template_directory_uri(). '/assets/images/add_new.jpg'; ?>" />
				</a>
				<img src="<?php echo get_template_directory_uri(). '/assets/images/slogan-2.jpg'; ?>" />
		</div>
		<div class="main-container">
				<?php if (have_posts()) : ?>
				  <div class="main">
					<img src="<?php echo get_template_directory_uri(). '/assets/images/youjigonglue.png'; ?>" />

				    <?php while (have_posts()) : the_post(); ?>
				       <?php get_template_part( "content","list" ); ?>
				    <?php endwhile; ?>
				  </div>
				<?php else: ?>
				<h1>No posts to show</h1>
			<?php endif ?>
			<?php 
				get_sidebar( ) 
			?>
			<div class="clearfix"></div>
			<div class="conner-cat"></div>
		</div>
		
	</div><!-- .content-area -->

<?php get_footer(); ?>
