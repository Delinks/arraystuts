<?php
//PHP array sort functions. An array can be sorted in alphabetical or numerical order, descending or ascending.
//sort(): sort arrays in ascending order
//rsort(): sort arrays in descending order
//asort(): sort assoc.arrays in ascending order according to value
//ksort(): sort assoc. arrays in ascending order, according to key
//arsort(): sort assoc. arrays in descending order, according to value
//krsort(): sort assoc. arrays in descending order, according to key
$mentors_1 = ['Amademlinks', 'Xyluz', 'Motun', 'codedgift'];


rsort($mentors);

print_r($mentors);
?>