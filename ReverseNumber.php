<?php
$number = readline("Enter the number :- ");
$reverseNumber = 0;
while($number > 0.9){
    $remainder = $number % 10;                           //getting last digit of number
    $number = $number / 10;                         
    $reverseNumber = $reverseNumber * 10 + $remainder; //Adding last digit after multiplt                      
}
echo "The reverse Number is $reverseNumber" 
?>