<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="usia" placeholder="input aangka">
        <input type="submit" name="submit" value="Submit" /> 
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){ 
    $usia=$_POST['usia'];
 
    if ($usia >= 6 && $usia <= 12) {
        echo "Waktu tidur yang baik: 10 jam";
    } elseif ($usia > 12 && $usia <= 18) {
        echo "Waktu tidur yang baik: 8-9 jam";
    } elseif ($usia > 18 && $usia <= 40) {
        echo "Waktu tidur yang baik: 7-8 jam";
    } else {
        echo "Usia tidak valid untuk perhitungan waktu tidur.";
    }

}