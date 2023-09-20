<?php

/*Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/ 

$n1 = 1;  
$n2 = 0;
$input = 10;
for($i = 0; $i <= $input; $i++){
    echo " $n2,";

     $temp=$n1+$n2;  
     $n1=$n2;  
     $n2=$temp; 
    
      if($n2>100){
        break;
      }
   }


