<?php
$arr=array(1,2,3,4,5);
array_shift($arr);
print_r($arr);

echo "<br>";
array_unshift($arr,6);
print_r($arr);

/*OUTPUT:
Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
Array ( [0] => 6 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
*/
?>