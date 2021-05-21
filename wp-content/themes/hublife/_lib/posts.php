<?php
/**
* Custom Post Types
* Desenvolvedor:Alex Freitas
*/

//=========================================================================================
// POST TYPE BENNER
//=========================================================================================

function post_type_banner_register() {
    $labels = array(
        'name' => 'Banner',
        'singular_name' => 'Banner',
        'menu_name' => 'Banner',
        'add_new' => _x('Adicionar Banner', 'item'),
        'add_new_item' => __('Adicionar Novo banner'),
        'edit_item' => __('Editar Banner'),
        'new_item' => __('Nova Banner')
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'banner'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-layout',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('banner', $args);
}
add_action('init', 'post_type_banner_register');



