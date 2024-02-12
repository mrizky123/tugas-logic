<?php

    $dataa =  140500;

    $datab = $dataa % 100000;
    $b = ($dataa - $datab) / 100000;

    $datac = $datab % 20000;
    $c = ($datab - $datac) / 20000;

    $datad = $datac % 500;
    $d = ($datac - $datad) / 500;



    echo "Jumlah Rp.100.000 : ".$b."<br>";
    echo "Jumlah Rp.20.000 : ".$c."<br>";
    echo "Jumlah Rp.500 : ".$d."<br>";
    



