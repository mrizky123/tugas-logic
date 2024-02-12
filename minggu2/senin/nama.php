<?php

function pembandingNama($nama1, $nama2) {

    $string1length = strlen($nama1);
    $string2length = strlen($nama2);

    if ($string1length > $string2length) {
        echo 'Riandy Fauzi lebih banyak di bandingkan Muhammad Rizky  ' ;
        
        $difference = $string1length - $string2length ;
        echo 'perbandingan adalah: ' . $difference . ' huruf.';
    } elseif ($string2length > $string1length) {
        echo 'Muhammad Rizky lebih banyak di bandingkan Riandy Fauzi ';
        $difference = $string2length - $string1length;
        echo 'perbandingan adalah: ' . $difference . ' huruf.';
    } else {
        echo 'Namanya sama.';
    }

}

pembandingNama("Riandy Fauzi", "Muhammad Rizky");

?>
