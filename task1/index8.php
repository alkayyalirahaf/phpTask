<?php

echo " <form method='POST'> 
<input type ='number' name = 'units'>Enter bill </input>
<button type = 'submit'>check</button>
</form>";





if (isset($_POST['units'])) {
    $units = $_POST['units'];

    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } 
    elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } 
    elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } 
    else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

  
    echo " $bill ";
}
?>