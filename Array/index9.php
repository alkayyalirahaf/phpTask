<?php
$colors = array("red", "blue", "white", "yellow");

function upperCase($colors){
    foreach($colors as &$color)
        $color=strtoupper($color);

    return $colors;
}

$colors = upperCase($colors);
print_r($colors);


?>