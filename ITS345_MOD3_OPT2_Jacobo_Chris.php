<?php 
function moving_zeros($var)
{

$value = 0; // Declares a counting variable

$size = count($var); // Size of array

// counts till non zero
for ($i = 0; $i < $size; $i++) {
    if ($var[$i] != 0) {
        $var[$value++] = $var[$i];
    }
}
// Puts zeros to the end of array
while ($value < $size) {
    $var[$value++] = 0;
}

return $var;
 
}

// main function
$array = array(0,5,3,2,1,5,0,3,4);

print_r(moving_zeros($array));

?>