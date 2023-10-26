<?php

/*20. Reverse the order of the cities in the array from question 19.*/

$city=array('Venice','Mykonos','Zurich','Barcelona');

echo"before rsorting<br/>";
print_r($city);
echo"<br/>";
rsort($city);
echo"after rsorting<br/>";
print_r($city);

/*output:
before rsorting
Array ( [0] => Venice [1] => Mykonos [2] => Zurich [3] => Barcelona )
after rsorting
Array ( [0] => Zurich [1] => Venice [2] => Mykonos [3] => Barcelona )
*/
?>
