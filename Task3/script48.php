<?php
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("red","black","blue");
print_r(array_reduce($a,"myfunction"));

/*OUTPUT:
-red-black-blue
*/
?>