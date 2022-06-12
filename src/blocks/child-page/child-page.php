<?php

add_action('init', function(){    
    register_block_type( 'ourplugin/child-page-link', array(
        // 'api_version' => 2,
        'render_callback' => function($attributes){
            ob_start(); ?>
            <h3 class=text-paragraph-frontend>Title: <?php the_title(); ?></h3>
            <h3 class=text-paragraph-frontend>Page ID: <?php echo get_the_ID(); ?></h3>
            <h3 class=text-paragraph-frontend>Post Parent ID: <?php echo wp_get_post_parent_id(get_the_ID()); ?></h3>
            <h3 class=text-paragraph-frontend>Child?: <?php 
            $parent = wp_get_post_parent_id(get_the_ID());
            if($parent!==0){
               echo  "Yes, I'm a Child Page, my parent is: ";
               ?>
               <a href="<?= get_the_permalink($parent)?>"><?= get_the_title($parent)?></a>
               <?php
            }else{
                echo  "Nope";
            }; 
            ?></h3>
            <?php return ob_get_clean();
        }     
    ) ); 
} );
    
