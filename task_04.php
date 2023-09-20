<?php

function fibonacci_series($count) {
    $num1 = 0;
    $num2 = 1;

    for($i = 0; $i < $count; $i++) {
        echo $num1 . " ";
        $temp = $num1 + $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
}

fibonacci_series(15);