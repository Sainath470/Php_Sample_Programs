<?php

$firstString = "Hello String";
$x = 200;
$y = 400;

echo "String is :$firstString\n";
echo "integer is:$x\n";
echo "float is: $y\n";
echo "$x \n $y";


function localVariable(){
    $num =45;
    echo "Local variable declared inside the function: $num\n";
}
localVariable();

$num1 = 10;
$num2 = 20;

function globalVariables(){
    $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
    echo " sum of the global variables is:" .$sum;
}
globalVariables();

?>