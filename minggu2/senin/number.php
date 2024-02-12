<?php 

function formatNumber($number) {
    if($number == 0) {
        $short = 'No data';
    } elseif($number < 1000000) {
        $short = round($number/1000, 1).'K';
    } elseif($number < 1000000000) {
        $short =  round($number/1000000, 1).'M';
    }
   return $short;
  
   }

echo formatNumber(9500);
echo "<br>";
echo formatNumber(1700000);