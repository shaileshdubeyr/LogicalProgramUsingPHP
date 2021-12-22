<?php
$number = readline("Enter the number to check perfect number :- ");
$perfectnumber = 0;
for($i = 1; $i <= $number/2; $i++){
    if($number % $i == 0){
        $perfectnumber += $i;
        if($perfectnumber > $number){
            break;                      /*checking the addition is grater 
                                          than input number or not*/
        }  
    }
}
if($number == $perfectnumber)             //comparing perfect number or not
    echo "$number : is perfect number";
else
    echo "$number : is not perfect number"; 
?>