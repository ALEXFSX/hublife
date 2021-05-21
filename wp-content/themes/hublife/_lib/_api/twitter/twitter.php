<?php
/*
* TWITTER API WP PLUGIN
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

define('TWITTER_URL', trailingslashit( get_stylesheet_directory_uri() . '/_lib/_api/twitter'));
define('TWITTER_DIR', trailingslashit( STYLESHEETPATH . '/_lib/_api/twitter'));

require_once TWITTER_DIR . '/class/ClassTwitterProxy.php';
require_once TWITTER_DIR . '/class/ClassTwitter.php';
require_once TWITTER_DIR . '/includes/TwitterShortcode.php';