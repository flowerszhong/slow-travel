<?php 


if ( ! function_exists( 'slowtravel_setup' ) ) :

function slowtravel_setup() {

	
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
	) );

	
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );
}
endif; 
add_action( 'after_setup_theme', 'slowtravel_setup' );

function slowtravel_scripts() {

	wp_enqueue_style( 'slowtravel-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'slowtravel_scripts' );


function slowtravel_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'top_search', 'slowtravel' ),
		'id'            => 'top-search',
		'description'   => __( 'top search bar.', 'slowtravel' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => __( '主边栏', 'slowtravel' ),
		'id'            => 'main-side',
		'description'   => __( '主边栏.', 'slowtravel' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'slowtravel_widgets_init' );



// function htx_custom_logo() {
// echo '
// <style type="text/css" id="test-insert-style">
// #wp-admin-bar-wp-logo > .ab-item .ab-icon { 
// 	boder:1px solid red;
// 	background-image: url('. get_bloginfo('template_directory') . '/assets/images/slow-icon.png) !important; 
// 	background-position: 0 0;
// 	}
// #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
// 	background-position: 0 0;
// 	}	
// </style>
// ';
// }
 
// //hook into the administrative header output
// add_action('admin_head', 'htx_custom_logo');


add_action('admin_head', 'my_custom_logo');
function my_custom_logo() {
   echo '
   <style type="text/css" id="djjj">
   #wp-admin-bar-wp-logo > .ab-item .ab-icon
    { background-image: url('. get_bloginfo('template_directory').'/assets/images/slow-icon.png) !important; }
   </style>';
}


function my_custom_login_logo() {
    echo '
<style type="text/css">
        .login h1 a { background-image:url('.get_bloginfo('template_directory').'/assets/images/slow-icon.png) !important; }
    </style>
';
}
add_action('login_head', 'my_custom_login_logo');


//remove submenus
function remove_submenus() {
  global $submenu;
  unset($submenu['index.php'][10]); // Removes 'Updates'.
  unset($submenu['themes.php'][5]); // Removes 'Themes'.
  unset($submenu['options-general.php'][15]); // Removes 'Writing'.
  unset($submenu['options-general.php'][25]); // Removes 'Discussion'.
  unset($submenu['edit.php'][16]); // Removes 'Tags'. 
}
add_action('admin_menu', 'remove_submenus');

function wps_admin_bar() {  
    global $wp_admin_bar;  
    $wp_admin_bar->remove_menu('wp-logo');  
    $wp_admin_bar->remove_menu('about');  
    $wp_admin_bar->remove_menu('wporg');  
    $wp_admin_bar->remove_menu('documentation');  
    $wp_admin_bar->remove_menu('support-forums');  
    $wp_admin_bar->remove_menu('feedback');  
}  
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' ); 


function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function getPostLikeCount($postID){
    $count_key = 'post_like_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

function setPostLikeCount($postID) {
    $count_key = 'post_like_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}





// function thumbs_rating_print($content)
// {
//     return $content.thumbs_rating_getlink();
// }
// add_filter('the_content', 'thumbs_rating_print');



require_once('bp-functions.php');
 require_once('pagenavi.php');



 ?>