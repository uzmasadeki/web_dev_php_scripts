<?php
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

/*OUTPUT:
Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
*/
?>