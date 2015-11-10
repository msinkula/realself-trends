<?php

/*
Theme Name: Real Self Trends
Description: Sarah Durkee made me do this.
Version: 1.0
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

// Register My Sidebar
/*register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));*/
//

// Register My Menus
register_nav_menus(array(
	'main-menu' => __( 'Main' ),
	'footer-menu' => __( 'Footer' ),
));
//

// Create Post Thumbnails
add_theme_support( 'post-thumbnails' );
//

// Create Custom Image Sizes
add_image_size( 'extra-large', 1000, 0 ); // 1000 pixels wide by 0 pixels tall, soft proportional crop mode
add_image_size( 'large-feed', 700, 400, true ); // 700 pixels wide by 400 pixels tall, hard crop mode
add_image_size( 'image_trendsblog_d', 128, 128, true ); // 128 pixels wide by 128 pixels tall, hard crop mode
add_image_size( 'image_trendsblog_m', 300, 300, true ); // 300 pixels wide by 300 pixels tall, hard crop mode


add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'extra-large' => __( 'Extra Large' ),
		'large-feed' => __( 'Large Feed' ),
    ) );
}

//

// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' );
//

// Remove Inline Styles from Captions
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;

	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) )
		return $content;

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}
//

// Get My Title Tag
function get_my_title_tag() {
	
	global $post;
	
	if ( is_front_page() ) {  // for the site’s Front Page
	
		bloginfo('description'); // retrieve the site tagline
	
	} 
	
	elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
	
		the_title(); // retrieve the page or posting title 
	
	} 
	
	else { // for everything else
		
		bloginfo('description'); // retrieve the site tagline
		
	}
	
	if ( $post->post_parent ) { // for your site’s Parent Pages
	
		echo ' | '; // separator with spaces
		echo get_the_title($post->post_parent);  // retrieve the parent page title
		
	}

	echo ' | '; // separator with spaces
	bloginfo('name'); // retrieve the site name
	
}
//

// Get the Month, Day & Year like Durkee designed it.
function get_durkees_date() {
	
	$theYear = get_the_time('Y');
	$thisYear = date('Y');
	
	if ($theYear == $thisYear) {
		
		the_time('M jS');
		
	}
	
	else {
		
		the_time('M jS, Y');
	}
	
}
//



?>