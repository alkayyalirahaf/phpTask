<?php


echo "
<form method='get'>
    <input type='number' name='year'>
    <button type='submit'>Check</button>
</form>
";

if(isset($_GET['year'])) {
    
$year = $_GET['year'];
if(($year % 400==0)||($year %4==0 && $year %100 !=0)){
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}}
?>

