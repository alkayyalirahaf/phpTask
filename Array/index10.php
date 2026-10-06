<?php

$colors = array("RED","BLUE", "WHITE","YELLOW"); 

function lowerCase($colors){
 
    foreach($colors as $index => $color)
        $colors[$index] = strtolower($color);

    return $colors;
}


$colors = lowerCase($colors);
print_r($colors);




?>