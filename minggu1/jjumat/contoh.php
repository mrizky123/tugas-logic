<?php 

$student = [
    [
        'nama' => "andy",
        'nilai' => [80,78,82,78,88],

    ],

    [
        'nama'=> 'beni',
        'nilai'=> [86,70,80,85,81],
    ],

    [
        'nama'=> 'dani',
        'nilai'=> [83,81,70,73,81],
    ],

    [
        'nama'=> 'eko',
        'nilai'=> [89,85,84,86,88],
    ]
];

foreach ($student as $s) {
    $total = array_sum ($s ['nilai']);
    echo "<br>total nilai $s[nama]: $total\n<br>";
}