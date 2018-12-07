<?php
/* dùng vòng lặp for để in ra key và value của mảng sau
 */
$student = array('nguyen van a','nguyen van b','nguyen van c','nguyen van d');
$arrlength =count($student);
for($i=0;$i<$arrlength;$i++){
    echo $i. $student[$i] ."<br>";
}