<?php


for($i=1;$i<=5;$i++){

$letter=chr(64+$i);
for($j=1;$j<=5;$j++){
    if($j<=5-$i){
        echo "A ";
    }else{  echo $letter . " ";}
}
echo "<br>";
}

?>