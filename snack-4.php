<?php 

$random_numbers = [];

$min = 1;

$max = 150;

while (count($random_numbers) < 15) {
    $numero_random = rand($min,$max);

    if (!in_array($numero_random, $random_numbers)) {
        $random_numbers [] = $numero_random;
    };
};

var_dump($random_numbers);

?>