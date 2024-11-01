<?php 
/*
Plugin Name: Simple Move Javascript To Footer
Plugin URI: 
Author: Djenci Duquene
Description: This plugin is going to allow you to place all the Javascript files to the footer
Version: 1.1
Author URI: https://dbdprojects.com
*/
// Move JavaScript to the Footer
function remove_head_scripts() {
   remove_action('wp_head', 'wp_print_scripts');
   remove_action('wp_head', 'wp_print_head_scripts', 9);
   remove_action('wp_head', 'wp_enqueue_scripts', 1);
   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
// END of the script to Move JavaScript to footer


