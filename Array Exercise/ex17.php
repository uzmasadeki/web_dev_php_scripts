<?php

/*17. Add a new city to your travel list from question 16.*/

$city=array('Venice','Mykonos','Zurich','Barcelona');
echo"before adding<br/>";
print_r($city);
echo"<br/>";
array_push($city,'Florence');
echo"after adding<br/>";
print_r($city);

/*output:
before adding
Array ( [0] => Venice [1] => Mykonos [2] => Zurich [3] => Barcelona )
after adding
Array ( [0] => Venice [1] => Mykonos [2] => Zurich [3] => Barcelona [4] => Florence )*/
?>
