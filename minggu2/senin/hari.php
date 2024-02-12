<?php 

$date = date("D d M Y");
function formatIDN($date){
    $hariIndonesia = [
        "Mon" => "senin",
        "Tue" => "selasa",
        "Ted" => "rabu",
        "Thus" => "kamis",
        "Fri"=> "jumat",
    ];

    
$merubahTanggal = date("D, d M Y", strtotime($date));
$merubahTanggal = strtr($merubahTanggal, $hariIndonesia);
return $merubahTanggal;
}

$merubahTanggal = formatIDN($date);
echo $date;
echo " vs ";
echo $merubahTanggal;