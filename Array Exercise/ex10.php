<?php

/*10. Sort the array from question 9 in reverse alphabetical order.*/

$alpha=array('W','Q','R','D','P');
echo"before rsort<br/>";
print_r($alpha);
echo"<br/>";
rsort($alpha);
echo"after rsorting<br/>";
print_r($alpha);

/*Output:
before rsort
Array ( [0] => W [1] => Q [2] => R [3] => D [4] => P )
after rsorting
Array ( [0] => W [1] => R [2] => Q [3] => P [4] => D )
*/
?>
