<meta content="text/html; charset=utf-8" http-equiv="content-type">

<?php
//$x =9;
//$x *= 5;
//$y =$x % 2;
//echo $x;
//echo $y;
$x = 10;
//$y = $x++;
$y = ++$x;
echo "Y: " .$y ."<br>"; //10
echo "X: " .$x; //11
//so sánh
$x =10;
$y =8;
//echo ($x === $y);
echo !($x > 1 && $y <5);
//$var = "PHP training";
//$var =12;
$n =12;
//$result =(is_string($var) == 1) ? "chuỗi" : "không là chuỗi";
//$result =($n >= 0) ? "số dương" : "số âm";
$result =($n >= 0) ? "số dương" : (($n <0) ? "số âm" : "số 0");
echo $result;
?>