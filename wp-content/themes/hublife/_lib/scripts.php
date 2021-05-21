<?php
/*
* Scripts
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

function call_script() {
    //wp_register_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_style('css-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.14', false);
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array(), '1.14', true);
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'call_script', 100);


function admin_script() {
    wp_enqueue_style('inputs', get_template_directory_uri() . '/_lib/_admin/assets/css/input-styles.css', array(), null);
}

add_action('admin_enqueue_scripts', 'admin_script', 100);

