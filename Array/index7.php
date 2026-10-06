<?php
$temperatures = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
    76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);
$avg=array_sum($temperatures)/count($temperatures);
sort($temperatures);
$lowest=array_slice($temperatures,0,7);
$highest=array_slice($temperatures,-7);


echo "Average Temperature is: $avg <br>";

echo "List of seven lowest temperatures: ";
foreach($lowest as $i){
print_r($i);
echo" ";}


echo "<br>List of seven highest temperatures: ";
foreach($highest as $i){
print_r($i);
echo" ";}

?>