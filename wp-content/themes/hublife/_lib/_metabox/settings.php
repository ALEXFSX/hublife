<?php
add_filter('mb_settings_pages', 'prefix_options_page');
function prefix_options_page($settings_pages)
{
    $settings_pages[] = array(
        'id'          => 'theme-options',
        'option_name' => 'options_gerais',
        'menu_title'  => __('Opções do Tema', 'textdomain'),
        // 'parent'      => 'themes.php',
    );
    return $settings_pages;
}

add_filter('rwmb_meta_boxes', 'prefix_options_meta_boxes');
function prefix_options_meta_boxes($meta_boxes)
{
   



    // $meta_boxes[] = array(
    //     'id'        => 'btn_cta',
    //     'title'     => 'Botões CTA',
    //     'pages'     => array('page'),
    //     'context'   => 'side',
    //     'priority'  => 'high',
    //     'settings_pages' => 'theme-options',

    //     'fields' => array(

       

    //         array(
                
    //             'type' => 'heading',
    //             'name' => 'Barra no Rodapé',
           
    //         ),
    //         array(
    //             'id' => 'set_rdp_bar_btn_tit',
    //             'type' => 'text',
    //             'name' => 'Titulo:',
    //             'std' => 'Cadastre-se agora',
    //         ),
    //         array(
    //             'id' => 'set_rdp_bar_btn_link',
    //             'type' => 'text',
    //             'name' => 'Link:',
    //         ),
    //         array(
    //             'id' => 'set_rdp_bar_btn_trgt',
    //             'name' => 'Tipo de link:',
    //             'type' => 'radio',
    //             'std' => '_blank',
    //             'options' => array(
    //                 '_blank' => 'Externo',
    //                 '_self' => 'Interno',
    //             ),
    //         ),
    //         array(
    //             'id' => 'set_rdp_bar_text',
    //             'type' => 'text',
    //             'name' => 'Texto Acompanhamento',
    //             'std' => 'O Pontes conecta cidadãos e advogados, garantindo um acesso à justiça mais ágil e democrático.',
    //         ),


    //     ),




    // );



    // $meta_boxes[] = array(
    //     'id'        => 'links_apps',
    //     'title'     => 'Lojas de Aplicativos',
    //     'pages'     => array('page'),
    //     'context'   => 'normal',
    //     'priority'  => 'high',
    //     'settings_pages' => 'theme-options',
    //     'fields' => array(

    //         // array(
                
    //         //     'type' => 'heading',
    //         //     'name' => 'Barra no Rodapé',
           
    //         // ),

    //         array(
              
    //             'type' => 'heading',
    //             'name' => 'Android',
         
    //         ),
    //         array(
    //             'id' => 'set_link_loja_android',
    //             'type' => 'url',
    //             'name' => 'Cliente:',
    //             'desc'=> 'adicione o link para o aplicativo',
    //         ),
    //         array(
    //             'id' => 'set_link_loja_android_adv',
    //             'type' => 'url',
    //             'name' => 'Advogado:',
    //             'desc'=> 'adicione o link para o aplicativo',
    //         ),
            

    //         array(
              
    //             'type' => 'heading',
    //             'name' => 'Ios',
         
           
    //         ),
    //         array(
    //             'id' => 'set_link_loja_ios',
    //             'type' => 'url',
    //             'name' => 'Cliente:',
    //             'desc'=> 'adicione o link para o aplicativo',
    //         ),
    //         array(
    //             'id' => 'set_link_loja_ios_adv',
    //             'type' => 'url',
    //             'name' => 'Advogado:',
    //             'desc'=> 'adicione o link para o aplicativo',
    //         ),
    


    //     ),




    // );



    // $meta_boxes[] = array(
    //     'id'             => 'settings_catalogo',
    //     'title'          => 'Informações gerais',
    //     'context'        => 'side',
    //     'settings_pages' => 'theme-options',
    //     'fields'         => array(

    //         array(
    //             'type' => 'heading',
    //             'name' => 'Mídias Sociais',
    //         ),

    //         array(
    //             'name' => 'URL Linkedin',
    //             'id'   => 'settings_linkedin_url',
    //             'type' => 'url',
    //         ),
    //         array(
    //             'name' => 'URL Instagram',
    //             'id'   => 'settings_instagram_url',
    //             'type' => 'url',
    //         ),

    //         array(
    //             'name' => 'URL Facebook',
    //             'id'   => 'settings_facebook_url',
    //             'type' => 'url',
    //         ),




    //         array(
    //             'type' => 'heading',
    //             'name' => 'Outras informações',
    //         ),

    //         array(
    //             'name' => 'Whatsapp (Botão Flutuante)',
    //             'id'   => 'settings_wpp_phone',
    //             'type' => 'text',
    //         ),
    //     ),
    // );

    return $meta_boxes;
}
