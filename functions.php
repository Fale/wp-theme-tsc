<?php
// Sidebars
function grimp_sas_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'grimp-sas' ),
		'id' => 'header-widget-area',
		'description' => __( 'The header widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Left Widget Area', 'grimp-sas' ),
		'id' => 'left-widget-area',
		'description' => __( 'The left widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Right Widget Area', 'grimp-sas' ),
		'id' => 'right-widget-area',
		'description' => __( 'The right widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'grimp_sas_widgets_init' );
?>
