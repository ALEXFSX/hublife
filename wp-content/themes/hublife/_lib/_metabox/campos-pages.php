<?php

add_filter('rwmb_meta_boxes', 'wpcf_meta_boxes_pages');
function wpcf_meta_boxes_pages($meta_boxes)
{


    //=========================================================================================
    // PAGES CONTATO
    //=========================================================================================

    // $meta_boxes[] = array (
    //     'id'        => 'informacoes-para-mapa',
    //     'title'     => 'Informações para mapa',
    //     'pages'     => array('page'),
    //     'context'   => 'normal',
    //     'priority'  => 'high',
    //     'include' => array(
    //         'relation'  => 'OR',
    //         'template'  => array('page-contato.php','page-venda.php'),
    //     ),
    //     'fields'    => array(
    //         array(
    //             'id'   => 'address',
    //             'name' => 'Endereço',
    //             'type' => 'text',
    //             'std'  => 'Av. Dom Luís, 500, sl 624  Aldeota - Fortaleza',
    //         ),
    //         array(
    //             'id' => 'map_contato',
    //             'type' => 'map',
    //             'name' => 'Map',
    //             'address_field' => 'address',
    //             'api_key'       => 'AIzaSyCyRR6NXLgFuiJ1oZu7jwSduBr1CRySbb4',
    //         ),
    //     ),
    // );










    //=========================================================================================
    // END DEFINITION OF META BOXES
    //=========================================================================================
    return $meta_boxes;
}
