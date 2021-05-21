<?php
/*
* Data Functions
* Desenvolvedor: Alex Freitas
* Email: alex_freitas_dev@outlook.com
*/

function formata_data($start, $final){
        $mes_abrev = array(
            "1"   => "Jan",
            "2"   => "Fev",
            "3"   => "Mar",
            "4"   => "Abr",
            "5"   => "Mai",
            "6"   => "Jun",
            "7"   => "Jul",
            "8"   => "Ago",
            "9"   => "Set",
            "10"   => "Out",
            "11"   => "Nov",
            "12"   => "Dez"
        );

        $dateStart = date_parse_from_format('Y-m-d', $start);
        $dateFinal = date_parse_from_format('Y-m-d', $final);
        $mes_start = $mes_abrev[$dateStart['month']];
        $mes_final = $mes_abrev[$dateFinal['month']];

        if($start == $final) {
            echo $dateFinal['day'].' de '.
                 $mes_start.' '.
                 $dateFinal['year'];
        }

        else if($dateStart['month'] == $dateFinal['month']) {
            echo $dateStart['day'].' a '.
                 $dateFinal['day'].' '.
                 $mes_start.' '.
                 $dateFinal['year'];
        }

        else {
            if($dateStart['year'] != $dateFinal['year']) :
                echo $dateStart['day']. ' de '.
                     $mes_start.' de '.
                     $dateStart['year'].' à '.
                     $dateFinal['day'].' de '.
                     $mes_final.' '.
                     $dateFinal['year'];
            else :
                 echo $dateStart['day']. ' de '.
                     $mes_start.' à '.
                     $dateFinal['day'].' de '.
                     $mes_final.' '.
                     $dateFinal['year'];
            endif;
        }
}

function formata_data_full($start, $final){
        $mes_abrev = array(
            "1"   => "Janeiro",
            "2"   => "Fevereiro",
            "3"   => "Março",
            "4"   => "Abril",
            "5"   => "Maio",
            "6"   => "Junho",
            "7"   => "Julho",
            "8"   => "Agosto",
            "9"   => "Setembro",
            "10"   => "Outubro",
            "11"   => "Novembro",
            "12"   => "Dezembro"
        );

        $dateStart = date_parse_from_format('Y-m-d', $start);
        $dateFinal = date_parse_from_format('Y-m-d', $final);
        $mes_start = $mes_abrev[$dateStart['month']];
        $mes_final = $mes_abrev[$dateFinal['month']];

        if($start == $final) {
            return $dateFinal['day'].' de '.
                 $mes_start.' de '.
                 $dateFinal['year'];
        }

        else if($dateStart['month'] == $dateFinal['month']) {
            return $dateStart['day'].' a '.
                 $dateFinal['day'].' de '.
                 $mes_start.' de '.
                 $dateFinal['year'];
        }

        else {
            if($dateStart['year'] != $dateFinal['year']) :
                return $dateStart['day']. ' de '.
                     $mes_start.' de '.
                     $dateStart['year'].' à '.
                     $dateFinal['day'].' de '.
                     $mes_final.' de '.
                     $dateFinal['year'];
            else :
                 return $dateStart['day']. ' de '.
                     $mes_start.' à '.
                     $dateFinal['day'].' de '.
                     $mes_final.' de '.
                     $dateFinal['year'];
            endif;
        }
}