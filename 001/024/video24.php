<!--lấy danh sách các khóa và danh sách các giá trị của một mảng nào đó-->
<?php
//$course = array("name" => "PHP", "time" => 2000);
$course =array ("PHP","Joomla","Zend Framework","jQuery");
echo "<pre>";
print_r($course);
echo "</pre>";
//xóa phần tử cuối cùng của mảng
echo $lastItem =array_pop($course) ."<br>";
//xóa phần tử đầu tiên của mảng
echo $firstItem =array_shift($course);
//xoa nhiều phần tử đầu tiền or cuối cùng của array

function removeItem(&$array,$type = "first", $total =20)
{
    $result = array();
    if (!empty($array)) {
        if($total >=count($array)){
            $result = $array;
            $array = null;
        }
        else{
            if ($type == "first") {
                for ($i = 1; $i <= $total; $i++) {
                    $result[] = array_shift($array);
                }

            } else if ($type == "last") {
                for ($i = 1; $i <= $total; $i++) {
                    $result[] = array_pop($array);
                }
            }
        }

    }
        return $result;

}
echo "<pre>";
print_r($course);
echo "</pre>";
$arrTemp = removeItem($course,"lasst",2);
echo"arrTemp: <br>";
echo "<pre>";
print_r($arrTemp);
echo "</pre>";
//$newArr =array_values($course);
$newArr =array_keys($course);

echo "<pre>";
print_r($newArr);
echo "</pre>";