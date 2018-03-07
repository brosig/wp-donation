<?php
/*
 * Add my menu to WP Admin Control	Panel
 */

// Hook the 'admin_menu' action hook, run the function named 'bfp_Add_Admin_Menu()'
add_action( 'admin_enqueue_scripts', 'bfp_admin_scripts' );
add_action( 'admin_menu', 'bfp_Add_Admin_Menu' );

// Add my top level menu link
function bfp_Add_Admin_Menu(){
	add_menu_page('Brosigs first plugin', 'Doação', 'manage_options', 'plugin-do-brosig', 'bfp_funcao_do_menu', 'dashicons-cart');
}

// Function to include my admin page when the menu is clicked
function bfp_funcao_do_menu(){
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	include_once plugin_dir_path( __FILE__ ) . 'bfp-first-acp-page.php';
}

// Enqueues the bfp-scripts to my admin page
function bfp_admin_scripts($hook) {
	// Só carrega na página principal do plugin
	if($hook != 'toplevel_page_plugin-do-brosig') {
		return;
	}
    wp_enqueue_script( 'bfp-scripts', plugins_url('js/bfp-scripts.js', dirname(__FILE__) ), array( 'jquery' ), '1.0.0', true );
}
