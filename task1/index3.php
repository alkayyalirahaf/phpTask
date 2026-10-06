<?php
echo " <form method='GET'> 
<input type ='number' name = 'num1'>Enter num1
<input type ='number' name = 'num2'>Enter num2 
<button type = 'submit'>check</button>
</form>";



    
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if(($num1==$num2)){
    $result=($num1+$num2)*3;
    echo "$result";
} else {
    $sum=$num1+$num2;
    echo "$sum";
}






?>