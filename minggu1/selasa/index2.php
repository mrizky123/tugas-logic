<?php

$mtk = 0;
$indo = 0;
$inggris = 0;
$hasil = $mtk + $indo + $inggris;
$rata = $hasil / 3;
if ($rata >= 85) {
    echo "Peserta diterima";
} else {
    echo "Peserta ditolak";
}

