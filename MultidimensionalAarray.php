<?php
//Multidimensionla arrays contains one or more arrays
//PHP supports MDAs that are 2,3,4,5 or more levels deep.
//however more than 3 levels deep are hard to manage for most people.
//arrays used to grp diff nos of variables
$mentors = ['Amademlinks', 'Xyluz', 'Motun', 'codedgift'];
$ma_ia_mentors = [
[
   "name" => "Amarachukwu",
   "username" => 'Amademlinks'
],   
[
    "name" => "Seyi",
    "username" => 'Xyluz'
]

];

$ma_aa_mentors = [
    ['Amademlinks', 'Xyluz',  ['Motun', 'codedgift']],
    ['Motun', 'codedgift', ['Amademlinks', 'Xyluz']]
];
echo($ma_ia_mentors[1]['name']);

 echo "<br><br>";
 echo($ma_aa_mentors[1][0]);

 echo "<br><br>";
 echo($ma_aa_mentors[0][2][1]);



?>