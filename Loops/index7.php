<?php

$n = 10;
$a = 0;
$b = 1;

for($i = 1;$i<$n;$i++){

echo $a;

if($i<$n){
    echo ", ";
}
$next= $a + $b;
$a = $b;
$b=$next;
}






?>