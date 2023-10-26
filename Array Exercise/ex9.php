<?php

/*9. Sort an array of words in alphabetical order.*/

$alpha=array('W','Q','R','D','P');
echo"before sort<br/>";
print_r($alpha);
echo"<br/>";
sort($alpha);
echo"after sorting<br/>";
print_r($alpha);

/*output:
before sort
Array ( [0] => W [1] => Q [2] => R [3] => D [4] => P )
after sorting
Array ( [0] => D [1] => P [2] => Q [3] => R [4] => W )
*/
?>
