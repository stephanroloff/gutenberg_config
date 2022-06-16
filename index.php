<?php
 
/*
Plugin Name: Guten Config
Description: Gutenberg Configuration.
Version 1.0
Author: Stephan
*/
 
if(! defined('ABSPATH')) exit; //Exit if accessed directly
 
function enqueue_all(){
   wp_enqueue_script('enqueue-all', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-element', 'wp-editor', 'wp-blocks'));
   wp_enqueue_style('enqueue-all-styles', plugin_dir_url(__FILE__) . 'build/index.css');
}

function enqueue_frontend(){
   wp_enqueue_script('enqueue-all', plugin_dir_url(__FILE__) . 'build/frontend.js', array('wp-element', 'wp-editor', 'wp-blocks'));
   wp_enqueue_style('enqueue-all-styles', plugin_dir_url(__FILE__) . 'build/frontend.css');
}

// Editor & Frontend
add_action('enqueue_block_assets', 'enqueue_all');
// Just Editor
// add_action('enqueue_block_editor_assets', 'enqueue_all');
// Just Frontend
// add_action('wp_enqueue_scripts', 'enqueue_frontend');


//------Including Dynamic Blocks--------
include 'src/blocks/00-muster-block/muster-block.php';
include 'src/blocks/dynamic/dynamic.php';
include 'src/blocks/child-page/child-page.php';
include 'src/blocks/child-links/child-links.php';