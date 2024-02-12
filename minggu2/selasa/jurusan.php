<?php 

function createArray(... $jurusan)  {
    
    $kapital = array_map("strtoupper",$jurusan);
    $yangSama= array_unique($kapital);

   foreach ($yangSama as $key => $value) {
    echo "$value" . "\n";

}

}

print_r (createArray("PPLG", "HTL", "KLN", "pplg",));