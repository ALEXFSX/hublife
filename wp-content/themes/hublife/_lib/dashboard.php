<?php
/*
* Dashboard functions
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

//=========================================================================================
// SAUDAÇÃO CUSTOMIZADA
//=========================================================================================

function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Olá', 'Bem vindo', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

//=========================================================================================
// CUSTOMIZAR O FOOTER (ASSINATURA DO PROJETO)
//=========================================================================================

function remove_footer_admin () {
    echo '© '.get_bloginfo('name');
}
add_filter('admin_footer_text', 'remove_footer_admin');

//=========================================================================================
// REMOVER WIDGETS
//=========================================================================================

function remove_widgets_painel() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );
}
add_action( 'admin_init', 'remove_widgets_painel' );

//=========================================================================================
// ADCIONANDO WIDGETS
//=========================================================================================

//ADD WIDGET SUPORTE CONVERTTE
function setup_suporte_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Convertte Web Intelligence | Suporte', 'suporte_dashboard_help');
    //add_meta_box('custom_help_widget', 'Convertte Web Intelligence | Suporte', 'suporte_dashboard_help', 'dashboard', 'side', 'high');
}

function suporte_dashboard_help() {
    echo 'Se você tiver qualquer dúvida ou precisar de ajuda, por favor, entre em contato conosco em <a href="http://www.convertte.com.br" target="_blank">http://www.convertte.com.br</a> ou mande um e-mail para <a href="mailto:contato@convertte.com.br">contato@convertte.com.br</a>.</br></br>
    <h4><b>Telefone:</b> (85) 3045-4550</h4>';
}

add_action('wp_dashboard_setup', 'setup_suporte_widgets');