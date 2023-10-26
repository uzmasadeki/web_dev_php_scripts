<?php

$array1 = array(2, 4, 6, 8, 10, 12);
$array2 = array(1, 2, 3, 4, 5, 6);
print_r(array_intersect($array1, $array2));

/* OUTPUT:
Array ( [0] => 2 [1] => 4 [2] => 6 )
 */
?>