<?php
 
/*
Plugin Name: Guten Config
Description: Gutenberg Configuration.
Version 1.0
Author: Stephan
*/
 
if(! defined('ABSPATH')) exit; //Exit if accessed directly
 
function noDynamic(){
   wp_enqueue_script('enqueue-no-dynamic', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-element', 'wp-editor', 'wp-blocks'));
   wp_enqueue_style('enqueue-no-dynamic-styles', plugin_dir_url(__FILE__) . 'build/index.css');
}
 
add_action('init', 'noDynamic');
 
include 'src/blocks/dynamic/dynamic.php';