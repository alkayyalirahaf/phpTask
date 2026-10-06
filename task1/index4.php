<?php
echo " <form method='GET'> 
<input type ='number' name = 'num1'>Enter num1
<input type ='number' name = 'num2'>Enter num2 
<button type = 'submit'>check</button>
</form>";



    
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$sum=$num1+$num2;
if(($sum==30)){
    $result=$num1+$num2;
    echo "$result";
} else {
   
    echo "false";
}






?>