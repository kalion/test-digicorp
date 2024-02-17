<?php

function ngitung($kata) {
    $temp = [];
    $perHuruf = str_split($kata);
    foreach($perHuruf as $k => $v) {
        if( empty($temp[$v]) ) {
            $temp[$v] = 1;
        } else {
            $temp[$v]++;
        }
    }
    arsort($temp);
    // var_dump($temp);
    $huruf = array_key_first($temp);
    return $huruf . " " . $temp[$huruf] . "X";
}

$kata = "ulermelingkerdiataspager";
echo $kata."\n";
echo ngitung($kata);
?>