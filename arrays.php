<?php
$size = array("1", "2", "3");

foreach($size as $s){
    echo "Size is:" .$s."\n";
}
    echo "Count of array is:" .count($size);
    echo "\n";

/**
 * Associative Array in PHP
 * Can print key and value of the array
 */
$student = array("student Name" => "Sainath", "Student Age" => "23", "Student Gender" => "Male");

foreach($student as $key => $value){
    echo "Key=" . $key .",Value=" . $value . "\n";
}

/**
 * Multidimensional Array
 */
$emp = array  
  (  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "\n";  
}
?>