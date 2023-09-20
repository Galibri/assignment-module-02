<?php

$num1 = 0; 
$num2 = 1;
$count = 0;

while ($count < 10) {
    echo $num1 . " ";
    
    $num3 = $num1 + $num2;
    if ($num3 > 100) {
        break;
    }
    
    $num1 = $num2;
    $num2 = $num3;
    
    $count = $count + 1;
}