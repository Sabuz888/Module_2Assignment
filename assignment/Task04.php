<?php

/*Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/ 

function myFunction($veryOld, $old, $new, $lenth){
    fibonacci($veryOld, $old, $new, $lenth);
}

function fibonacci($veryOld, $old, $new, $lenth){
    for ($i = 0; $i < $lenth; $i++) {
        echo $veryOld . " ";
        $veryOld = $old;
        $old = $new;
        $new = $veryOld + $old;        
    }
}

myFunction(0, 1, 1, 15);