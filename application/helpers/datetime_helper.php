<?php

function id_date($date){
    $bln=[
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    $date=explode("-", $date);
    return $date[2]." ".$bln[$date[1]-1]." ".$date[0];
}

function id_date2($date){
    $bln=[
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    $date=explode("/", $date);
    return $date[0]." ".$bln[$date[1]-1]." ".$date[2];
}

function oriDate($date){
    $bln=[
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    $date=explode(" ", $date);
    $iBln=array_search($date[1], $bln);
    return $date[2]."-".sprintf("%02s", ($iBln+1))."-".$date[0];
}

?>