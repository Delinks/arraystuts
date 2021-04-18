<?php
$mentors_1 = ['Amademlinks', 'Xyluz', 'Motun', 'codedgift'];

$mentors_2 = ['professor', 'Jeff', 'Jovialcore', 'Temitechy'];

$mentors = array_merge($mentors_1,$mentors_2);

for($i = 0; $i < count($mentors); $i++)
{
   echo($mentors[$i]." is a mentor <br><br>");
}

?>