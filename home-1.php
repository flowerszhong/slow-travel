<?php get_header(); ?>


<?php if(is_home()): ?>

<?php 
get_template_part( "home",'slider' );
 ?>

<?php endif ?>

	<div class="wrap">
		<?php if (have_posts()) : ?>
		  <h1>Latest Posts</h1>
		  <div class="main">
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
	</div><!-- .content-area -->

<?php get_footer(); ?>
