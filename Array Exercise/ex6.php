<?php

/*6. Use a loop to display each number in the array from question 5.*/

$numbers=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($numbers));
echo "</br>";
echo "those numbers are :-";
foreach( $numbers as $num)
{
    echo "</br>";
    echo ($num);
    echo "</br>";
}

    /* output:
    total numbers in above array =9
those numbers are :-
1

2

3

4

5

6

7

8

9
    */
?>
