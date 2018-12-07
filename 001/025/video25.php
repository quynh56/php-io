<?php
$course = array("php","jooma","zend framework","jooma");
echo "<pre>";
print_r($course);
echo "</pre>";

//xóa bất kỳ phần tử nào trong mảng
unset($course[0],$course[1]);
echo "<pre>";
print_r($course);
echo "</pre>";

//thêm 1 hoặc nhiều phần tử vào cuối mảng
array_push($course,"HTML","CSS");
echo "<pre>";
print_r($course);
echo "</pre>";

//thêm 1 hoặc nhiều phần tử vào đầu mảng
echo $length =array_unshift($course,"JV","JQ");
echo "<pre>";
print_r($course);
echo "</pre>";

//tạo mảng mới các vị trí trong mảng thay đổi
$newArr =array_reverse($course);
echo "<pre>";
print_r($newArr);
echo "</pre>";

//hoán đổi tỉ số và giá trị của mảng từ value ->key , từ key->value
$newArr =array_flip($course);
echo "<pre>";
print_r($newArr);
echo "</pre>";


/*xóa phần tử trùng tên nhau
$newArr =array_unique($course);
echo "<pre>";
print_r($newArr);
echo "</pre>";
*/

