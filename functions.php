<?php

/**
 * @return void
 */
function kahlils_theme_setup() {

	add_theme_support( 'title-tag' );


	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'top' => esc_html__( 'Top Menu', 'kahlils-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'kahlils_theme_setup' );


/**
 * Widgets
 *
 * @return void
 */
function wp_blank_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kahlils-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'kahlils-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_blank_widgets_init' );


function theme_enqueue_styles() {
    // Add the following two lines //
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js' );
    // ------               -------//
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

?>
