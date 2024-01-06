<?php 

// The variables

$a = 12;
$b = 38;
 
// Swapping in place

echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b;

$variable = $a;
$a = $b;
$b = $variable;
 
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";

?>