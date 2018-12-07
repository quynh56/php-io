<?php
/* dùng while do để in ra key và value của mảng
*/
$students = array('nguyen van a','nguyen van b','nguyen van c','nguyen van d');
$arrlength = count($students);
$x=0;
while ($x<$arrlength){
    echo $x . $students[$x] ."<br>";
    $x++;
}

