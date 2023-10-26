<?php

/*18. Remove a city of your choice from the array and display the updated list.*/

$city=array('Venice','Mykonos','Zurich','Barcelona');
echo"before deleting<br/>";
print_r($city);
echo"<br/>";
unset($city[2]);
echo"after deleting<br/>";
print_r($city);

/*output:
before deleting
Array ( [0] => Venice [1] => Mykonos [2] => Zurich [3] => Barcelona )
after deleting
Array ( [0] => Venice [1] => Mykonos [3] => Barcelona )*/
?>
