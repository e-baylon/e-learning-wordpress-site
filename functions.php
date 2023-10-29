<?php
/**
 * 
 * Sets up the theme defaults and registers support for various WordPress features.
 * 
 * 
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package elearning_ebaylon3
 */


 ?>

 <?php
// add support for title tag

// enqueue stylesheet


//  this function will add all of your styles and scripts

function elearningtheme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus ( 
        array(
            'main-menu' => 'Main Menu',
            // 'footer-menu' => 'Footer Menu',
        )

);

add_theme_support('custom-logo', array(
    'height'   => 100,
    'width'   => 400,
    'flex-height'   => true,
    'flex-width'   => true,
    'header-text' => array( 'site-title', 'site-description')

));
 }

add_action('after_setup_theme', 'elearningtheme_setup');

// registers one menu in one location - main menu

// load custom fonts

wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cabin&family=Roboto+Slab&display=swap', false );
 
function myfirsttheme_enqueue_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script( 'first-script', get_template_directory_uri() . '/js/index.js', false, NULL, 'all' );
    wp_enqueue_script( 'first-script' );

}

add_action('wp_enqueue_scripts', 'myfirsttheme_enqueue_styles');

function elearningtheme_enqueue_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'elearningtheme_enqueue_styles');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function myfirstheme_widgets_init() {


	register_sidebar( array(
		'name'          => 'Blog sidebar',
		'id'            => 'blog_sidebar',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => 'Alert sidebar',
		'id'            => 'alert_sidebar',
		'before_widget' => '<div class="alert-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => 'Footer widget',
		'id'            => 'footer_widget',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'myfirstheme_widgets_init' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$more = sprintf( '<a class="read-more" href="%1$s">  %2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Read More', 'textdomain' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

 ?>




