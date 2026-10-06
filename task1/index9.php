<?php



echo " <form method='GET'> 
<label for='num1'>num1</label>
<input type ='number' id='num1' name = 'num1'>

<label for='opr'>operator</label>
<input type ='text' name = 'opr' id='opr'>

<label for='num2'>num2</label>
<input type ='number' id = 'num2' name = 'num2'> 

<button type = 'submit'>check</button>
</form>";



    
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['opr'];


if(($operator=='+')){
    $result=$num1+$num2;
    echo "$result";
} elseif($operator=='-') {
   $result=$num1-$num2;
        echo "$result";

}


 elseif($operator=='*') {
   $result=$num1*$num2;
        echo "$result";

}
elseif($operator=='/') {
   $result=$num1/$num2;
        echo "$result";

}

?>





