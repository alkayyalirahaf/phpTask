<?php
echo " <form method='GET'> 
<input type ='number' name = 'age'>Enter your age </input>
<button type = 'submit'>check</button>
</form>";


if(isset($_GET['age'])){
    $age = $_GET['age'];

    if($age>=18 ){
        echo"eligible to vote";
    }
    else{
        echo " not eligible to vote";

    }



}







?>