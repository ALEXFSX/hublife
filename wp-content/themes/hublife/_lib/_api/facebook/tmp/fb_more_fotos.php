<?php
/*
* FACEBOOK API WP PLUGIN: LOAD MORE GALERIA TEMPLATE
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

require(FACEBOOK_DIR . '/tmp/FacebookGaleria.php');

if($fb_more) :
    echo '<div class="wrap-token">
    <button class="fb-more-gal btn-more" data-album="'.$album_id.'" data-qtd="'. $itens .'" data-token="'.$fb_next.'">Carregar mais '.$hiddebtn.'</button></div>';
endif;

?>