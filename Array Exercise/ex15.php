<?php

/*15. Create a multidimensional array to store information about movies, including title, director, and
release year for at least two movies. Display the information for one of the movies.*/

$movies=array(
    array("title"=>'Inception',"director"=>'Christopher Nolan',"release_year"=>2013),
    array("title"=>'Prestige',"director"=>'Christopher Nolan',"release_year"=>2006),
);
print_r($movies[1]);

/*ouput:
Array ( [title] => Prestige [director] => Christopher Nolan [release_year] => 2006 )*/
?>
