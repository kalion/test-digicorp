<?php

$mulai = 1;
$rambu = [1 => "merah", "kuning", "hijau"];

function gontaGanti() {
    global $mulai, $rambu;
    $nyala;
    if( !empty($rambu[$mulai]) ) {
        $nyala = $rambu[$mulai]."\n";
        
        $mulai++;
        if($mulai > 3) $mulai = 1;
        
        return $nyala;
    }
}

for($i=1; $i<=15; $i++) {
    echo gontaGanti();
}
?>

