<?php
/*4. Check if the color "Green" exists in the array from question 1.*/

$color= array('black', 'beige','pastle blue','sea green');

if (in_array("Green", $color))
  {
  echo "color founded";
  }
else
  {
  echo "there is no color that mentioned above";
  }

    /*output:
    there is no color that mentioned above*/
?>
