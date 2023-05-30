<?php 

    function ps_enqueue_scripts() {
        //wp_enqueue_style( 'style-name', get_stylesheet_uri() );
        wp_enqueue_script( 'prince_street_js', get_template_directory_uri() . '/includes/js/custom.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'ps_enqueue_scripts' );

?>