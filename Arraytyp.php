<?php
//array: a special variable, which can hold more than one value @ atime
//Indexed array assigned automatically based on index(always starts from 0).
//$cars = array("Volvo", "BMW", "Toyota");
//echo $cars[2] 
//$cars[1] = "bMW"
//$cars[2] = "toyota"

//$mentors_1 = array('xyluz', 'Dmatrix', 'Motun', 'codedgift'); 

//$mentors_2 = ['xyluz', 'Dmatrix', 'Motun', 'codedgift'];

//echo($mentors_2[1]);

//echo '<br><br>';
//print($mentors_2[0]);

//Associative arrays:use named keys that assigned to them. 
//2 ways to create them.
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43")

$me = [
    "name" => "Amarachukwu",
    "slack_username" => "Amademlinks",
    "profession" => "Backend_PHP intern"

    

];
echo($me["slack_username"]);
//if you want to get name or profession change this:echo($me["here"]);
//mainly for database collection of info.
?>.