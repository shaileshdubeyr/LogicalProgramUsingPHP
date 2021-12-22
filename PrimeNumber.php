<?php
$number = readline("Enter the number ");
$counter = 0;
for($i = 1; $i <= $number; $i++){
    if($number % $i == 0){
         $counter++;
    }
}
if($counter == 2)
    echo "$number :- Is prime number";
else
    echo "$number :- Is not a is prime number";
?>