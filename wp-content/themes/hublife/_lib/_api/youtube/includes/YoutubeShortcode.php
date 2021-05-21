<?php
/*
* YOUTUBE API WP PLUGIN
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

function YoutubeShortcode( $atts ) {
    // Attributes
    extract( shortcode_atts(
        array(
            'apikey'    => '',
            'channel'   => '',
            'itens'     => '3',
            'template'  => '1',
            'title'     => 'true',
            'likes'     => 'true',
            'caption'   => 'false',
            'more'      => 'false'

        ), $atts)
    );

    if (empty($apikey) || empty($channel)) return false;

    $ytshort = new ClassYoutube($apikey, $channel, $itens, $template, $title, $likes, $caption, $more, '');
    $ytshort->getYoutube();
}
add_shortcode( 'youtube', 'YoutubeShortcode');