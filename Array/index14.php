<?php
$array = array(2, 0, 10, 12, 6);

$lowest = null;

foreach ($array as $number) {
    if ($number != 0) {
        if ($lowest === null || $number < $lowest) {
            $lowest = $number;
        }
    }
}

echo $lowest;




?>