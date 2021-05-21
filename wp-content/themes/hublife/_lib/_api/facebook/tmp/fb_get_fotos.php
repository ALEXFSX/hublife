<?php
/*
* FACEBOOK API WP PLUGIN: GALERIA TEMPLATE
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

$div_id = md5(uniqid(rand(), true));

echo '<div id="'.$div_id.'" class="facebook-album">';

    require(FACEBOOK_DIR . '/tmp/FacebookGaleria.php');

    if($more == 'true' && $fb_more) :
        echo '<div class="wrap-token"><button class="fb-more-gal btn-more" data-album="'.$_GET['id'].'" data-qtd="'. $itens .'" data-token="'.$fb_next.'">Carregar mais</button></div>';
    endif;

echo '</div>';
?>
