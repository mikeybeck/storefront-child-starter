<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
function enqueue_child_theme_styles() {

//enqueue bootstrap in the child theme 
wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);
wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css', false, NULL, 'all');

//enqueue default stylesheet
wp_enqueue_style( 'default', get_stylesheet_directory_uri().'/default.css');

//enqueue my child theme stylesheet
wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('theme') );

}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);


/* Remove sidebars */
function remove_sidebars() {
  unregister_sidebar( 'sidebar-1' ); // primary
 // unregister_sidebar( 'sidebar-2' ); // secondary
}

/* Remove sidebar from all pages except those using page-sidebar.php template */
// Need to figure out width CSS for sidebar pages later...
if (!is_admin()) {
	$url = explode('?', 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	$id = url_to_postid($url[0]);

	$template = get_post_meta( $id, '_wp_page_template', true );

	if ($template !== "page-sidebar.php") {
		//error_log('template ' . $template);
		add_action( 'widgets_init', 'remove_sidebars', 11 );
	}
}













