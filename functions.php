<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'chld_thm_cfg_parent_css' ) ):
	function chld_thm_cfg_parent_css() {
		wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', [
			'bootstrap',
			'bootstrap-theme',
			'slicknav',
			'foundation-icons',
		] );
		wp_enqueue_style( 'style_css', get_theme_root_uri() . 'style.css', [
			'bootstrap',
			'bootstrap-theme',
			'slicknav',
			'foundation-icons',
		] );
	}
endif;

add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


// END ENQUEUE PARENT ACTION
//
// Your code goes below
//
if ( function_exists( 'acf_add_options_page' ) ) {

	$args = [

		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Site Options',

		/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
		'menu_title' => '',

		/* (string) The slug name to refer to this menu by (should be unique for this menu).
		Defaults to a url friendly version of menu_slug */
		'menu_slug'  => '',

		/* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
		Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
		'capability' => 'manage_options',

		'position'    => false,

		/* (string) The slug of another WP admin page. if set, this will become a child page. */
		'parent_slug' => '',

		'icon_url' => 'dashicons-admin-site',

		'post_id'  => 'site-options',
		'autoload' => false,

	];
	acf_add_options_page( $args );
}