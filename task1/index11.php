<?php

echo "
<form method='GET'>
    <input type='number' name='number'>
    <button type='submit'>Check</button>
</form>
";

if (isset($_GET['number'])) {

    $number = $_GET['number'];

    if ($number > 0) {
        echo "Positive";
    } elseif ($number < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }
}

?>