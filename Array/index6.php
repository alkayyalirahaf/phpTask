<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"); 
asort($fruits);
foreach($fruits as  $i => $fruit )
    echo "$i = $fruit";
?>