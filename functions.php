<?php
//require_once get_template_directory() . '/inc/tgm.php';
require_once get_template_directory() . '/inc/theme-options.php';
require_once get_template_directory() . '/inc/theme-elements.php';


if ( ! function_exists( 'TAIBA_setup' ) ) :
	
	function TAIBA_setup() {
		load_theme_textdomain( 'TAIBA', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'mainmenu' => esc_html__( 'Primary', 'TAIBA' ),
		) );
		function add_menuclass($ulclass) {
		   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
		   
		}
		add_filter('wp_nav_menu','add_menuclass');
		function add_liclass($liclass) {
		  
		    return preg_replace('/<li /', '<li class="nav-item"', $liclass);
		}
		add_filter('wp_nav_menu','add_liclass');

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'TAIBA_setup' );

function TAIBA_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'TAIBAcontent_width', 640 );
}
add_action( 'after_setup_theme', 'TAIBA_content_width', 0 );

// sidebar
function TAIBA_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'footer', 'TAIBA' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'TAIBA' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-titel">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'footer section', 'TAIBA' ),
		'id'            => 'footer_three',
		'description'   => esc_html__( 'Add footer 3 here.', 'TAIBA' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-titel">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'TAIBA_widgets_init' );


//add css and js
function TAIBA_scripts() {
  wp_enqueue_style( 'TAIBA-bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '215', true );
  wp_enqueue_style( 'TAIBA-lineicons', get_template_directory_uri() . '/assets/fonts/line-icons.css', '215', true );
  wp_enqueue_style( 'TAIBA-owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', '215', true );
  wp_enqueue_style( 'TAIBA-owltheme', get_template_directory_uri() . '/assets/css/owl.theme.css', '215', true );
  wp_enqueue_style( 'TAIBA-animate', get_template_directory_uri() . '/assets/css/animate.css', '215', true );
  wp_enqueue_style( 'TAIBA-maincss', get_template_directory_uri() . '/assets/css/main.css', '215', true );
  wp_enqueue_style( 'TAIBA-responsive', get_template_directory_uri() . '/assets/css/responsive.css', '215', true );
  wp_enqueue_style( 'TAIBA-style', get_stylesheet_uri() );




  wp_enqueue_script( 'TAIBA-jqueryminjs', get_template_directory_uri() . '/assets/js/jquery-min.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-popperminjs', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-bootstrapminjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-owlcarouseljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-wowjs', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-jquerynavjs', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-scrollingnavjs', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '1215', true );
  wp_enqueue_script( 'TAIBA-initjs', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '1215', true );
   wp_enqueue_script( 'TAIBA-easingminjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1215', true );
   wp_enqueue_script( 'TAIBA-formvalidatorjs', get_template_directory_uri() . '/assets/js/form-validator.min.js', array('jquery'), '1215', true );
   wp_enqueue_script( 'TAIBA-contactformscriptjs', get_template_directory_uri() . '/assets/js/contact-form-script.min.js', array('jquery'), '1215', true );
       

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'TAIBA_scripts' );
if ( !class_exists( 'redux-framework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' );
}


?>