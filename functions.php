<?php

// Add scripts and stylesheets
function dopetrope_scripts() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
  wp_enqueue_script( 'dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js' );
  wp_enqueue_script( 'scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' );
//  wp_enqueue_script( 'onvisible', get_template_directory_uri() . '/assets/js/jquery.onvisible.min.js' );
  wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'skelview', get_template_directory_uri() . '/assets/js/skel-viewport.min.js');
  wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
  wp_enqueue_script( 'scrollback', get_template_directory_uri() . '/assets/js/scrollback.js' );
//  wp_enqueue_script( 'wpb_togglemenu', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20160909', true );
//  wp_enqueue_script( 'button', get_template_directory_uri() . '/assets/js/button.js' );
//  wp_enqueue_script( 'footer', get_template_directory_uri() . '/assets/js/footer.js' );
}
add_action( 'wp_enqueue_scripts', 'dopetrope_scripts');

// Wordpress titles
add_theme_support( 'title-tag' );

// Add menu support
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

// Custom menu
function wpb_dopetrope_menu() {
  register_nav_menu('dopetrope-menu',__('Dopetrope Menu'));
}
add_action( 'init', 'wpb_dopetrope_menu');

// Featured image
add_theme_support( 'post-thumbnails');

add_image_size( 'square', 250, 250, true );
add_image_size( 'square-thmb', 150, 150, true );
add_image_size( 'portrait', 400, 600, true );

// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );

// Excerpt length
function my_excerpt_length( $length ) {
      return 16;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );
remove_filter( 'menu_order', 'custom_menu_order' );

function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 3', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

/* Google Maps */
function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyAt1jaPPs76ly0JRAHpA0W8ofXZGxR8IYQ');
}
add_action('acf/init', 'my_acf_init');

/* Logo support */
add_theme_support( 'custom-logo', array(
	'height'      => 240, // set to your dimensions
	'width'       => 240,
	'flex-height' => true,
	'flex-width'  => true,
) );
