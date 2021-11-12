<?php

    $post = $wp_query->post;
    
    if ( is_single(495) ) {
        include(TEMPLATEPATH . '/services-logo_design.php');
        
        
    } elseif ( is_single(501) ) {
        include(TEMPLATEPATH . '/services-digital_design_development.php');

    } else {
        include(TEMPLATEPATH . '/services-content.php');
    }

?>