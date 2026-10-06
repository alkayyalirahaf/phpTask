<?php
echo " <form method='GET'> 
<input type ='number' name = 'num1'>Enter num1
<input type ='number' name = 'num2'>Enter num2 
<input type ='number' name = 'num3'>Enter num3
<button type = 'submit'>check</button>
</form>";



    
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];


if($num1 > $num2 && $num1>$num3){
    echo"$num1";
}

if($num2 > $num1 && $num2>$num3){
    echo"$num2";
}

if($num3 > $num1 && $num3>$num2){
    echo"$num3";
}


?>