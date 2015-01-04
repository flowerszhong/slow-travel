<?php get_header(); ?>

	<div class="content-area">
		<?php if (have_posts()) : ?>
		  <h1>Latest Posts</h1>
		  <ul class="mini-list">
		    <?php while (have_posts()) : the_post(); ?>
		      <li>
		        <h2><a href="<?php the_permalink() ?>">
		          <?php the_title(); ?></a>
		          <?php the_time("jS F"); ?>
		        </h2>
		        <p><?php the_excerpt(); ?></p>
		        <p><?php the_tags( "Tagged with: ", " / ", "" ); ?></p>
		      </li>
		    <?php endwhile; ?>
		  </ul>
		<?php else: ?>
		<h1>No posts to show</h1>
	<?php endif ?>
	</div><!-- .content-area -->

<?php get_footer(); ?>
