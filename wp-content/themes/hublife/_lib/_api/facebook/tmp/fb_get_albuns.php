<?php
/*
* FACEBOOK API WP PLUGIN: ALBUMS TEMPLATE
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

$div_id = md5(uniqid(rand(), true));
echo '<div id="'.$div_id.'" class="facebook-album">';

    require(FACEBOOK_DIR . '/tmp/FacebookAlbums.php');

    $newitens = $itens - 4;
    // if($newitens) : $itens = $newitens; endif;

    if($more == 'true') :
        echo '<div class="wrap-token">
        <button class="fb-more btn-more" data-qtd="'. $newitens .'" data-token="'.$fb_next.'">Carregar mais</button></div>';
    endif;
echo '</div>';
?>
