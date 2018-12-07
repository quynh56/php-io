<?php
/* dùng vòng lặp do-while để in ra key và value của mảng*/
$students =array('nguyen van a','nguyen van b','nguyen van c','nguyen van d');
$arrlength =count($students);
$i =0;
do{
    echo $i . $students[$i]."<br>";
    $i++;
}
while($i<$arrlength );
