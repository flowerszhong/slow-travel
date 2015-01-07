<div class="content-item">

<div class="thumbnail-wrap">
<a href="<?php the_permalink() ?>">
	<?php 
	$size = 'thumbnail'; 
	// $size = array(180,160); 
	 if ( has_post_thumbnail() ) {
	     the_post_thumbnail( $size );
	 } else {
	     $attachments = get_children( array(
	         'post_parent' => get_the_ID(),
	         'post_status' => 'inherit',
	         'post_type' => 'attachment',
	         'post_mime_type' => 'image',
	         'order' => 'ASC',
	         'orderby' => 'menu_order ID',
	         'numberposts' => 1)
	     );
	     foreach ( $attachments as $thumb_id => $attachment ) {
	         echo wp_get_attachment_image($thumb_id, $size);
	     }
	 }
	 ?>

</a>
</div>

<div class="post-meta">

	<div class="post-meta-header">
		<div class="author-avatar">
			<a href="<?php get_the_author('url' ); ?>">
				<?php echo get_avatar( get_the_author_meta('mail'), '64','', get_the_author() ); ?>
			</a>
		</div>

		<div class="post-meta-title-wrap">
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" class="post-title-link">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="author-meta">
				<span class="author-name">
					<label>作者:</label>
					<?php the_author(); ?>
				</span>
				<span class="post-date">
					<?php the_time("Y-m-d"); ?>
				</span>
				<span class="views-count">
					<?php 
				echo getPostViews(get_the_ID());
					 ?>
				</span>
				<span class="comment-count">
					<?php comments_number(); ?>
				</span>
				<span class="fav-count">
				<?php 
				if(function_exists('thumbs_rating_getlink')){
					// echo thumbs_rating_getlink();
				} 
				 ?>


				</span>
			</div>
		</div>

		
	</div>

	<div class="post-meta-content">
		<div class="post-excerpt">
			<p><?php the_excerpt(); ?></p>
			<p><?php the_tags( "来自: ", "   ", "" ); ?></p>
		</div>
	</div>

	
</div>
	
<div class="clearfix"></div>

</div>

