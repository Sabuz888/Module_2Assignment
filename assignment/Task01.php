<?php

/*
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.
*/ 

function myFunction($start, $end, $step)
{
    forEven($start, $end, $step);
    whileEven($start, $end, $step);
    doEven($start, $end, $step);
}
myFunction(1, 20, 2);

function forEven($start, $end, $step){
    echo "For loop \n \n";
    for ($i=$start; $i<=$end;$i+=$step) {
        if ($i % 2 != 0) {
            echo $i+1;
            for ($g=1; $g<= $i; $g++) {
            }
            if ($g == $end) {
                echo ".";
            } else {
                echo ", ";
            }
        }
    }

    echo PHP_EOL;
}


function whileEven($start, $end, $step){
    echo PHP_EOL;
    echo "While Loop\n\n";
    $i=$start;
    while ($i<=$end) {
        if ($i % 2 != 0) {
            echo $i+1;
            for ($g=1;$g<=$i-1;$g++) {
            }
            if ($g==$end) {
                echo ".";
            } else {
                echo ", ";
            }
        }
        $i = $i + $step;
    }
    echo PHP_EOL;
}



function doEven($start, $end, $step)
{
    echo PHP_EOL;
    echo "Do While Loop \n\n";
    $i = $start;
    do {
        if ($i % 2 != 0) {
            echo $i+1;
            for ($g = 1; $g <= $i - 1; $g++) {
            }
            if ($g == $end) {
                echo ".";
            } else {
                echo ", ";
            }
        }
        $i = $i + $step;
    } while ($i <= $end);
    echo PHP_EOL;
    echo PHP_EOL;
}
?>