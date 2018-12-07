<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function pow2(&$n1,$n2){
    //chuyền & bào $n1 =>&$n1:tham chiếu có $n1*$n1= 4 nên kết quả trả về thay đổi là 4 lên khi kết thúc hàm biến thay đổi
    //$n2:tham trị
    $result = 0;
    //n1*n1 +m2*n2
    $n1 = $n1*$n1;
    $n2 = $n2*$n2;
    $result = $n1 +$n2;
    return $result;
}

$n1 =2;
$n2 =4;
$number = pow2($n1,$n2);
echo "number: ".  $number . "<br>";
echo "n1: " . $n1 ."<br>";
echo "n2: " .$n2 . "<br>";

?>
</body>
</html>