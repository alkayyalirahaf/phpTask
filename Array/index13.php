<?php


$numbers = array();

while (count($numbers) < 10) {
    $number = rand(11, 20);

    if (!in_array($number, $numbers)) {
        $numbers[] = $number;
    }
}

print_r($numbers);


?>