<?php
/*
* FACEBOOK API WP PLUGIN: AJAX FUNCTIONS
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

function facebook_ajax_album() {
    $itens    = $_POST['itens'];
    $next     = $_POST['next'];
    $fb_album = new ClassFacebook('1244834918956802%7CzTADTyC7zSb5BRbFcYDsKFnb6l4', '197231006959251', $itens, 'false', $next);
    $fb_album->getFacebook();
    exit;
}

add_action('wp_ajax_facebook_pagination', 'facebook_ajax_album');
add_action('wp_ajax_nopriv_facebook_pagination', 'facebook_ajax_album');

function facebook_ajax_galeria() {
    $itens    = $_POST['itens'];
    $album    = $_POST['album'];
    $next     = $_POST['next'];
    $fb_album = new ClassFacebook('1244834918956802%7CzTADTyC7zSb5BRbFcYDsKFnb6l4', $album, $itens, 'false', $next);
    $fb_album->getFacebookGallery();
    exit;
}

add_action('wp_ajax_facebook_pagination_g', 'facebook_ajax_galeria');
add_action('wp_ajax_nopriv_facebook_pagination_g', 'facebook_ajax_galeria');