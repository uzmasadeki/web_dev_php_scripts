<?php
$number = array(4, 8, 2, 22, 16);
sort($number);

foreach ($number as $key => $val) {
    echo "number[" . $key . "] = " . $val . "<br>";
}

/*OUTPUT:
number[0] = 2
number[1] = 4
number[2] = 8
number[3] = 16
number[4] = 22
*/
?>