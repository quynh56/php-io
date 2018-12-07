<?php
$php  ="PHP";
$zend = "Zend Framework";
$joomla ="Jooma";
$coures = array();
$coures[]="PHP";
$coures[]= "Zend Framework";
$coures[]="Jooma";
$length =count($coures);
// count: đếm số phần tử trong 1 mảng
echo $length ."<br>";
// cách 1:length
if($length >0){
    echo "không phải mảng rỗng <br>";
}else{
    echo "mảng rỗng";
}
//cách 2:empty
if(!empty($courses)){
    echo "không là mảng rỗng";
}else{
    echo "mảng rỗng <br>";
}
//in mảng
print_r($coures);
echo "<pre>";
print_r($coures);
echo "</pre>";