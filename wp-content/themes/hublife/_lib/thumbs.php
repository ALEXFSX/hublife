<?php
/*
* Thumbnail functions
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

//=========================================================================================
// ADICIONANDO TAMANHHO DE IMAGENS
//=========================================================================================

if (function_exists('add_image_size')) {
    add_image_size('thumb-175x80', 175, 80, true);
    add_image_size('thumb-340x245', 340, 245, true);
    add_image_size('thumb-315x400', 315, 400, true);
    add_image_size('thumb-375x375', 375, 375, true);
    add_image_size('thumb-565x310', 565, 310, true);
    add_image_size('thumb-600x400', 600, 400, true);
    add_image_size('thumb-745x380', 745, 380, true);
    add_image_size('thumb-800x325', 800, 325, true);
    add_image_size('thumb-1920x715', 1920, 715, true);
}

//=========================================================================================
// RESETA TAMANHHO DE IMAGENS
//=========================================================================================

add_filter('intermediate_image_sizes','get_sizes');
function get_sizes ($sizes){
    $type = get_post_type($_REQUEST['post_id']);
    foreach($sizes as $key => $value){
        //Gera o tamanhho full para o slide
        if($type=='slides'  &&  $value != 'full' && $value != 'thumb-385x180'){
            unset($sizes[$key]);
        }
        if($type=='page'  &&  $value != 'full'){unset($sizes[$key]);} //Gera o tamanhho full para pages
    }
    return $sizes;
}

//=========================================================================================
// LAZY LOAD FUNCTIONS
//=========================================================================================


function owllazy($post, $size, $alt ) {
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post), $size);
    if(!$thumb) {
        $thumb = wp_get_attachment_image_src( $post, $size );
    }

    $url = $thumb['0'];
    echo '<img class="owl-lazy" data-src="'.$url.'" alt="'.$alt.'" title="'.$alt.'">';
}

function imglazy($post, $size, $efeito, $alt ) {
    $thumb = wp_get_attachment_image_src( $post, $size );
    $url = $thumb['0'];
    echo '<img class="b-lazy '.$efeito.'" data-src="'.$url.'" alt="'.$alt.'" title="'.$alt.'">';
    echo '<noscript><img src="'.$url.'" alt="'.$alt.'" title="'.$alt.'"></noscript>';
}

function thumblazy($post, $size, $efeito, $alt ) {
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post), $size);
    $url = $thumb['0'];

    if ( has_post_thumbnail($post) ) :
        echo '<img class="b-lazy '.$efeito.'" data-src="'.$url.'" width="'.$thumb['1'].'" height="'.$thumb['2'].'" alt="'.$alt.'" title="'.$alt.'">';
        echo '<noscript><img src="'.$url.'" alt="'.$alt.'" width="'.$thumb['1'].'" height="'.$thumb['2'].'" title="'.$alt.'"></noscript>';
    else :
        echo '<img src="'.get_template_directory_uri().'/assets/images/no-thumbs.jpg" />';
    endif;
}

function lazyimage( $atts ) {
    // Attributes
    extract( shortcode_atts(
        array(
            'post'   => '',
            'size'   => '',
            'efeito' => 'fade',
            'alt'    => '',
            'tipo'   => 'thumb'
        ), $atts)
    );

    if(empty($post)) return false;
    if($tipo == 'attachment') {
        imglazy($post, $size, $efeito, $alt);
    } else {
        thumblazy($post, $size, $efeito, $alt);
    }

}
add_shortcode( 'lazy', 'lazyimage');