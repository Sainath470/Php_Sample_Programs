<?php
$number = 19;
$count = 0;

for($i = 2; $i <= $number - 1; $i++){
    if(($number % $i) == 0){
        $count += 1;
    }
}

if($count > 0){
    echo "$number is not a prime number";
}else{
    echo "$number is a prime number";
}
?>