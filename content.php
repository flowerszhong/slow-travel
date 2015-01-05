<?php

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	the_title( $before = '', $after = '', $echo = true );
	the_content( $more_link_text = null, $strip_teaser = false );
	?>

	
</div><!-- #post-## -->
