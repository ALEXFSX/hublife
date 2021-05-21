<?php
/*
* FACEBOOK API WP PLUGIN
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

$token   = '1244834918956802%7CzTADTyC7zSb5BRbFcYDsKFnb6l4';
$fanpage = '115293081886298';

define('FACEBOOK_URL', trailingslashit( get_stylesheet_directory_uri() . '/_lib/_api/facebook'));
define('FACEBOOK_DIR', trailingslashit( STYLESHEETPATH . '/_lib/_api/facebook'));

require_once FACEBOOK_DIR . '/class/ClassFacebookAlbums.php';
require_once FACEBOOK_DIR . '/includes/FacebookAjax.php';
require_once FACEBOOK_DIR . '/includes/FacebookShortcode.php';