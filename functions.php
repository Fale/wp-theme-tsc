<?php
// Sidebars
function grimp_clean_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'grimp-clean' ),
		'id' => 'header-widget-area',
		'description' => __( 'The header widget area', 'grimp-clean' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

        register_sidebar( array(
                'name' => __( 'Top Widget Area', 'grimp-clean' ),
                'id' => 'top-widget-area',
                'description' => __( 'The top widget area', 'grimp-clean' ),
                'before_widget' => '<div id="top-widget-area" class="widget-area" role="complementary"><ul class="xoxo"><li id="%1$s" class="widget-container %2$s">',
                'after_widget' => '</div></li></ul></div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3><div id="widget-inner">',
        ) );

	register_sidebar( array(
		'name' => __( 'Left Widget Area', 'grimp-clean' ),
		'id' => 'left-widget-area',
		'description' => __( 'The left widget area', 'grimp-clean' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div id="widget-inner">',
	) );

	register_sidebar( array(
		'name' => __( 'Right Widget Area', 'grimp-clean' ),
		'id' => 'right-widget-area',
		'description' => __( 'The right widget area', 'grimp-clean' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div id="widget-inner">',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'grimp-clean' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'grimp-clean' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'grimp_clean_widgets_init' );


/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'grimp_clean_setup' );

if ( ! function_exists( 'grimp_clean_setup' ) ):
function grimp_clean_setup() {
    // TRANSLATIONS
	load_theme_textdomain( 'grimp-clean', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	define( 'HEADER_IMAGE', '%s/img//path.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to twentyten_header_image_width and twentyten_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'grimp_clean_header_image_width', 850 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'grimp_clean_header_image_height', 110 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
//	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See twentyten_admin_header_style(), below.
	add_custom_image_header( '', 'grimp_clean_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'path' => array(
			'url' => '%s/img/path.jpg',
			'thumbnail_url' => '%s/img/path-thumbnail.jpg',
			'description' => __( 'Path', 'grimp_clean' )
		),
	) );
}
endif;

if ( ! function_exists( 'grimp_clean_admin_header_style' ) ) :
function grimp_clean_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

?>
