<?php

$prefix = 'wpcf_';
add_filter('rwmb_meta_boxes', 'wpcf_meta_boxes');
function wpcf_meta_boxes($meta_boxes)
{

      //==============================================
    // BANNER
    //==============================================

    $meta_boxes[] = array(
        'id' => 'banner',
        'title' => 'Detalhes do Banner',
        'pages' => array('banner'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(

            array(
                'name'             => '',
                'desc'             => 'Imagem desktop',
                'id'               => 'BannerImgDesktop',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'name'             => '',
                'desc'             => 'Imagem Mobile',
                'id'               => 'BannerImgMobile',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),



            array(
                'type' => 'heading',
                'name' => 'Configurações de Link',
            ),

            array(
                'name'       => 'Link',
                'id'         => "Banner_link",
                'type'       => 'text',
                'required'   => false,
                'columns' => 4,
                'admin_columns' => 'after title',
            ),

            array(
                'name'       => 'Target do Link',
                'id'         => "Banner_target",
                'type'       => 'radio',
                'options'    => array('_self' => 'Interno', '_blank' => 'Externo'),
                'std'        => '_self',
                'columns' => 4,
                'admin_columns' => 'after title',
            ),

            array(
                'name'       => 'Texto a ser exibido',
                'id'         => "Banner_btn",
                'type'       => 'text',
                'columns' => 4,
                'admin_columns' => 'after title',
            ),
        )
    );






    //=========================================================================================
    // END DEFINITION OF META BOXES
    //=========================================================================================
    return $meta_boxes;
}
