<?php
/*
* YOUTUBE API WP PLUGIN: AJAX YOUTUBE
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

function youtube_ajax_search() {

    $apikey   = 'AIzaSyCjANNbWlD1o8jP4q1i7Q08obpxR7bPiPI';
    $channel  = 'UCrXwk3lBrIw36KOsxUcon0g';
    $itens    = $_POST['itens'];
    $title    = $_POST['title'];
    $likes    = $_POST['likes'];
    $caption  = $_POST['caption'];
    $template = '';
    $more     = 'false';
    $token    = $_POST['token'];

    $yt = new ClassYoutube($apikey, $channel, $itens, $template, $title, $likes, $caption, $more, $token);
    $yt->getYoutube();
    exit;
}

add_action('wp_ajax_youtube_pagination', 'youtube_ajax_search');
add_action('wp_ajax_nopriv_youtube_pagination', 'youtube_ajax_search');