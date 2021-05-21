<?php
/*
* Configurações de Taxonomias
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

//=========================================================================================
// TAXONOMIAS EMPREENDIMENTOS
//=========================================================================================

// $labels = array( 'name' => _x( 'Categorias', 'Categorias do empreendimento', 'text_domain' ));
// $args   = array(
//   'labels'            => $labels,
//   'hierarchical'      => true,
//   'public'            => true,
//   'show_ui'           => true,
//   'show_admin_column' => true,
//   'show_in_nav_menus' => true,
//   'show_tagcloud'     => true,
//   'rewrite'           => array('slug' => 'empreendimento/categorias'),
// );

// register_taxonomy( 'categorias', array( 'empreendimento' ), $args);


// register_taxonomy( 'cidades', array( 'empreendimento' ), $args);

//=========================================================================================
// FLUSH REWRITE
//=========================================================================================

function custom_taxonomy_flush_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
add_action('init', 'custom_taxonomy_flush_rewrite');