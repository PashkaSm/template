<?php
define( 'HOME_PAGE_ID', get_option( 'page_on_front' ) );
define( 'BLOG_ID', get_option( 'page_for_posts' ) );
define( 'POSTS_PER_PAGE', get_option( 'posts_per_page' ) );
/* INCLUD CUSTOM FUNCTIONS
   ========================================================================== */
// Recommended plugins installer
require_once 'include/plugins/init.php';
// Custom functionality
require_once 'include/core.php';
require_once 'include/acf/acf-settings.php';
//require_once 'include/woocommerce.php';
// require_once('include/cpt.php');
//update image  size
// add_image_size( '2048x2048_cropped', '2048', '2048', true );
function set_default_image_sizes() {
	update_option( 'thumbnail_size_w', 400 );
	update_option( 'thumbnail_size_h', 400 );
	update_option( 'medium_size_w', 800 );
	update_option( 'medium_size_h', 800 );
	update_option( 'large_size_w', 2048 );
	update_option( 'large_size_h', 2048 );
}
add_action( 'after_switch_theme', 'set_default_image_sizes' );
/* REGISTER MENUS
   ========================================================================== */
register_nav_menus( array(
	'main_menu'   => 'Main navigation',
	'second_menu' => 'Second navigation',
	'foot_menu'   => 'Footer navigation'
) );
function wp_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}
