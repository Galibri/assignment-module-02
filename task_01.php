<?php

// Using For Loop
function printEvenNumbersForLoop($start, $end, $step) {

    // We have step as 2 and start as 1, so we're validating the starting point to be the even number.
    $start = $start % 2 == 0 ? $start : $start + 1;

    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
// Calling the function
printEvenNumbersForLoop(1, 20, 2);



// Using While Loop
function printEvenNumbersWhileLoop($start, $end, $step) {

    // We have step as 2 and start as 1, so we're validating the starting point to be the even number.
    $i = $start % 2 == 0 ? $start : $start + 1;

    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Calling the function
printEvenNumbersWhileLoop(1, 20, 2);



// Using Do-While Loop
function printEvenNumbersDoWhileLoop($start, $end, $step) {
    
    // We have step as 2 and start as 1, so we're validating the starting point to be the even number.
    $i = $start % 2 == 0 ? $start : $start + 1;

    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

// Calling the function
printEvenNumbersDoWhileLoop(1, 20, 2);