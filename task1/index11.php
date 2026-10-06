<?php
echo " <form method='GET'> 
<input type ='text' name = 'scores'>Enter scores </input>
<button type = 'submit'>check</button>
</form>";


if(isset($_GET['scores'])){
    $scores= explode(",",$_GET['scores']);
    $sum=array_sum($scores);
    $avg=$sum/count($scores);

    if($avg<60){
        echo"F";
    }
    elseif($avg<70){
        echo "D";

    }
   
   elseif($avg<80){
        echo "C";

    }
      elseif($avg<90){
        echo "B";

    }
      elseif($avg<100){
        echo "A";

    }
   

}







?>