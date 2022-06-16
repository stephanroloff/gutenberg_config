<?php

add_action('init', function(){    
    register_block_type( 'ourplugin/child-links', array(
        // 'api_version' => 2,
        'render_callback' => function($attributes){
            ob_start(); ?>
            <h2>CHILD LINKS</h2>
            <?php wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => get_the_ID(),
            )) ?>
            <?php return ob_get_clean();
        }     
    ) ); 
} );

    
