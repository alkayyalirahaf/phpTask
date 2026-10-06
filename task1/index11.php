<?php
echo " <form method='GET'> 
<input type ='number' name = 'num'>Enter a number </input>
<button type = 'submit'>check</button>
</form>";


if(isset($_GET['num'])){
    $num = $_GET['num'];

    if($num>0){
        echo"positive";
    }
    elseif($num<0){
        echo "negative";

    }
    else{
       echo "0";

    }



}







?>