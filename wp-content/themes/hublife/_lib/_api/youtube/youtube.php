<?php
/*
* YOUTUBE API WP PLUGIN
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

$api_key = 'AIzaSyCjANNbWlD1o8jP4q1i7Q08obpxR7bPiPI';
$channel = 'UCrXwk3lBrIw36KOsxUcon0g';

define('YOUTUBE_URL', trailingslashit( get_stylesheet_directory_uri() . '/_lib/_api/youtube'));
define('YOUTUBE_DIR', trailingslashit( STYLESHEETPATH . '/_lib/_api/youtube'));

require_once YOUTUBE_DIR . '/class/ClassYoutube.php';
require_once YOUTUBE_DIR . '/includes/YoutubeAjax.php';
require_once YOUTUBE_DIR . '/includes/YoutubeShortcode.php';

// $YoutubeVideos = new ClassYoutube($api_key, $channel, '5', 'true', '');