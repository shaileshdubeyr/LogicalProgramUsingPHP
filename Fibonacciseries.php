<?php 
$num1 = 1;
$num2 = 0;
echo "The fibonacci series is \n";
for($i = 0; $i <= 10; $i++){
    $sum = $num1 + $num2;
    echo $sum." ";
    $num2 = $num1;
    $num1 = $sum;  
}
?>