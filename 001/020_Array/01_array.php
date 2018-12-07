<?php
$n =20;
$str ="PHP";
var_dump($str);
var_dump($n);
echo "<br>";
echo gettype($str) ."<br>";
if(is_numeric($n)){
    echo "Number";
} else{
    echo "not number";
}