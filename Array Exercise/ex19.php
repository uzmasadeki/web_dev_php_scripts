<?php

/*19. Sort the cities in alphabetical order.*/

$city=array('Venice','Mykonos','Zurich','Barcelona');

echo"before sorting<br/>";
print_r($city);
echo"<br/>";
sort($city);
echo"after sorting<br/>";
print_r($city);

/*output:
before sorting
Array ( [0] => Venice [1] => Mykonos [2] => Zurich [3] => Barcelona )
after sorting
Array ( [0] => Barcelona [1] => Mykonos [2] => Venice [3] => Zurich )
*/

?>
