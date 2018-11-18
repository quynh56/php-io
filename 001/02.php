<?php
$firstName = "john";
$lastName = "Smith";
var_dump($firstName);
echo "<br>";

$fullName =$firstName . " " . $lastName;
echo $firstName ;
echo "<br>";
echo $lastName;
echo "<br>";
echo $fullName;
echo "<br>";
$number =12;
echo $number;
echo "<br>";
echo gettype($number);
echo "<br>";
$number_1 =12.34;
echo $number_1;
//chuyển thập phân về số nguyên
echo "<br>";
// c1: echo (int)$number_1;
//c2:
settype($number_1, "integer");
echo $number_1;
define("PI,3.14");
echo PI;
define("COURSE,PHP Training");
echo COURSE;
?>