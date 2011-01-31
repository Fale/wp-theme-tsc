<?php
// Sidebars
function grimp_washer_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'grimp-washer' ),
		'id' => 'header-widget-area',
		'description' => __( 'The header widget area', 'grimp-washer' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Left Widget Area', 'grimp-washer' ),
		'id' => 'left-widget-area',
		'description' => __( 'The left widget area', 'grimp-washer' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div id="widget-inner">',
	) );

	register_sidebar( array(
		'name' => __( 'Right Widget Area', 'grimp-washer' ),
		'id' => 'right-widget-area',
		'description' => __( 'The right widget area', 'grimp-washer' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div id="widget-inner">',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'grimp-washer' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'grimp-washer' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'grimp_washer_widgets_init' );
?>
