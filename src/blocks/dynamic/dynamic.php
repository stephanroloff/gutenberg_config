<?php
 
function adminAssets(){
   $route = WP_PLUGIN_URL . '/guten_config_plugin';
  
   wp_register_style('blockstyles', $route . '/build/index.css');
   wp_register_script('newblocktype', $route . '/build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
   register_block_type( 'ourplugin/dynamic', array(
       // 'api_version' => 2,
       'editor_script' => 'newblocktype',
       // 'script' => 'newblocktype2',
       'editor_style' => 'blockstyles',
       'render_callback' => 'block_dynamic_callback'
   ) );
}           
  
function block_dynamic_callback($attributes){
   $route = WP_PLUGIN_URL . '/guten_config_plugin';
  
   wp_enqueue_script('load-dynamic', $route . '/build/frontend.js', array('wp-element', 'wp-editor', 'wp-blocks'));
   wp_enqueue_style('load-dynamic-styles', $route . '/build/frontend.css');
 
   // return '<p class=text-paragraph-frontend>Today the sky</p>';
   
   ob_start(); ?>
   <h3 class=text-paragraph-frontend>Today the sky is Green</h3>
   <?php return ob_get_clean();
}    
 
add_action('init', 'adminAssets');