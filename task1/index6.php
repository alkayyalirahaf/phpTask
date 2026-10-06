<?php
echo " <form method='GET'> 
<input type ='number' name = 'num'>Enter a number </input>
<button type = 'submit'>check</button>
</form>";


if(isset($_GET['num'])){
    $num = $_GET['num'];

    if($num>=20 && $num<=50){
        echo"true";
    }
    else{
        echo "false";

    }



}







?>