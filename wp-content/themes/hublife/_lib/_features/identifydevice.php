<?php
/*
* Informa ao servidor qual device o usuário está usando
* Desenvolvedor: Alex Freitas   
* Email: alex_freitas_199@live.com
*/


function detect_device()
{
    $device = '';
    isset($_SERVER['HTTP_USER_AGENT']);

    $iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
    $webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");

    // detect os version
    if ($iPod || $iPhone || $iPad) {
        $device = 'ios';
    } else if ($Android) {
        $device = 'android';
    }

    return $device;
}
