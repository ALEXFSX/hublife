<?php
/*
* YOUTUBE API WP PLUGIN: LOAD MORE TEMPLATE
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

require(YOUTUBE_DIR . '/tmp/YoutubeGetVideos.php');

if($yt_next) :
    echo '<div class="wrap-token"><button class="yt-more-videos btn-more" data-id="'.$div_id.'_popup" data-title="'.$title.'" data-like="'.$likes.'" data-caption="'.$caption.'" data-qtd="'. $itens .'" data-token="'.$yt_next.'">Carregar mais</button></div>';
endif;

?>