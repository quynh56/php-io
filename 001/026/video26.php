<?php
/* lieen
 * $array1 = array("a","b","c");
$array2 =array(2,4,6);
$array3 =array("PHP","Joomla");
$newArray = array_merge($array1,$array2,$array3);
echo "<pre>";
print_r($newArray);
echo "</pre>";*/


//phần tử ngẫu nhiên
$course = array("php" =>"PHP","jl" =>"Joomla","zend"=>"Zend Framework");
$keyArray = array_rand($course,2);
echo "<pre>";
print_r($course);
echo "</pre>";
echo "<pre>";
print_r($keyArray);
echo "</pre>";

// tìm kiếm trong mảng
echo $key1 = array_search("PHP",$course) ."<br>";
echo $key1 = array_search("Joomla",$course) ."<br>";
if(array_key_exists("jl",$course)){
    echo "Exists";
}
//kiểm tra key chữ hoa chữ thường
$newArr=array_change_key_case($course,CASE_UPPER);

echo "<pre>";
print_r($newArr);
echo "</pre>";
//đưa một mảng về 1 chuỗi

$course1 =array("PHP","Joomla","Zend");
echo $str = implode("--",$course);
//đưa 1 chuỗi về 1 mảng
$fullname ="nguyen van a";
$array = explode(" ",$fullname);
echo "<pre>";
print_r($array);
echo "</pre>";