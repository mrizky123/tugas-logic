<?php

$discount= 7 / 100;
$totalBarang= 154000;
$min = 100000;
$totalDiskon = $totalBarang * $discount;
$total_bayar= $totalBarang - $totalDiskon;


if ($totalBarang >= $min) {
    echo "Discount 7%";
    echo "Total Bayar : Rp. $total_bayar";
}else{
    echo "total pembayaran anda adalah $totalBarang";
}

?>