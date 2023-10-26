<?php
$flowers=array("rose","sunflower","lily","merigold","lotus");
print_r(array_chunk($flowers,2));

/*OUTPUT:
Array ( [0] => Array ( [0] => rose [1] => sunflower ) [1] => Array ( [0] => lily [1] => merigold ) [2] => Array ( [0] => lotus [1] => jasmin ) )
*/
?>