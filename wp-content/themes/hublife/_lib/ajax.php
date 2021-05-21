<?php
/*
* AJAX functions
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

//=========================================================================================
// MAILCHIMP
//=========================================================================================

function mailchimp_ajax_newsletter() {

    $mailchimp  = new mailchimp_form();
    $email      = $_POST['email'];
    $uf         = $_POST['uf'];
    $cidade     = $_POST['cidade'];

    echo json_encode( array(
            'error' => array (
            'add_list'  => $mailchimp->lead($email, $uf, $cidade),
            )
        ));
    exit;
}

add_action('wp_ajax_newsletter', 'mailchimp_ajax_newsletter');
add_action('wp_ajax_nopriv_newsletter', 'mailchimp_ajax_newsletter');
