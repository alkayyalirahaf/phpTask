<?php
echo " <form method='GET'> 
<input type ='number' name = 'temp'>Enter Temp </input>
<button type = 'submit'>check</button>
</form>";


if(isset($_GET['temp'])){
    $temp = $_GET['temp'];

    if($temp <20 ){
        echo"we are in winter";
    }
    else{
        echo "we are in summer";

    }



}







?>