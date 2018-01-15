<?php
/**
 * Plugin Name: BlogBeitrag - Skripte und Stylesheets einbinden
 * Description: Skripte und Stylesheets richtig im WordPress Front- und Backend einbinden
 * Author: Woodpresser
 * Author URI: https://profiles.wordpress.org/woodpresser
 * Plugin Uri: https://woodpress.de/skripte-und-stylesheets-richtig-in-wordpress-einbinden/
 * Version: 1.0.0
 */

function register_my_frontend_scripts() {
	//Hier werden Skripte und Stylesheets für das Frontend registriert
	wp_register_style( 'my_frontend_style', plugin_dir_url( __FILE__ ) . 'my_frontend_style.css' );
	wp_register_script( 'my_frontend_script', plugin_dir_url( __FILE__ ) . 'my_frontend_script.js' );

	//Skripte und Stylesheets ins Frontend einbinden
	wp_enqueue_style( 'my_frontend_style' );
	wp_enqueue_script( 'my_frontend_script' );
}
add_action( 'wp_enqueue_scripts', 'register_my_frontend_scripts' );

function register_my_backend_scripts() {
	//Hier werden Skripte und Stylesheets für das Backend registriert
	wp_register_style( 'my_backend_style', plugin_dir_url( __FILE__ ) . 'my_backend_style.css' );
	wp_register_script( 'my_backend_script', plugin_dir_url( __FILE__ ) . 'my_backend_script.js' );

	//Skripte und Stylesheets ins Backend einbinden
	wp_enqueue_style( 'my_backend_style' );
	wp_enqueue_script( 'my_backend_script' );
}
add_action( 'admin_enqueue_scripts', 'register_my_backend_scripts' );