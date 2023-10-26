<?php
$arr=array("one","two","three","four");
array_push($arr,"zero");
print_r($arr);
echo "<br>";
array_pop($arr);
print_r($arr);

/*OUTPUT:
Array ( [0] => one [1] => two [2] => three [3] => four [4] => zero )
Array ( [0] => one [1] => two [2] => three [3] => four )
*/
?>