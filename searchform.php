<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="searchbar-wrap">
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="搜目的地/攻略/酒店/用户" />
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</div>
</form>