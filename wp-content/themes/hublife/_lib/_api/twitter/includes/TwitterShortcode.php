<?php
/*
* YOUTUBE API WP PLUGIN
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

function TwitterShortcode( $atts ) {
    // Attributes
    extract( shortcode_atts(
        array(
            'itens' => '3',
            'name'  => ''
        ), $atts)
    );

    $tweet = new ClassTwitter();
             $tweet->getTweet();
}
add_shortcode( 'twitter', 'TwitterShortcode');