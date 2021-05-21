<?php
/*
* FACEBOOK API WP PLUGIN: LOAD MORE ALBUMS TEMPLATE
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

require(FACEBOOK_DIR . '/tmp/FacebookAlbums.php');

if($newitens) : $itens = $newitens; endif;

if($fb_more) :
    echo '<div class="wrap-token">
    <button class="fb-more btn-more" data-qtd="'. $itens .'" data-token="'.$fb_next.'">Carregar mais '.$hiddebtn.'</button></div>';
endif;

?>