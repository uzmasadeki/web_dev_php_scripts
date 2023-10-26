<?php

/*11. Create two arrays, one with fruits and another with vegetables. Merge them into a single array.*/

$fruit=array('grapes','apple');
print_r($fruit);
echo"<br/>";
$veggies=array('tomatoes','ginger');
print_r($veggies);
echo"<br/>";
echo"mergging both array ";
print_r(array_merge($fruit,$veggies));

/*output:
Array ( [0] => grapes [1] => apple )
Array ( [0] => tomatoes [1] => ginger )
mergging both array Array ( [0] => grapes [1] => apple [2] => tomatoes [3] => ginger )
*/
?>
