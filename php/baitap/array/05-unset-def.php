<?php
/*
 dùng vòng lặp foreach để in ra key và value của mảng sau
sau đó dùng lệnh unset để huy phần tử có key là 2 và def
sau đó in ra mảng ms bằng lệnh foreach
 */
$students =array();
$students[0]='A';
$students[1]='B';
$students[2]='C';
$students[3]='D';
$students[4]='E';
$students['abc']='F';
$students['def']='G';
foreach($students as $key => $value){
    echo "key: " . $key ." => " . $value ."<br>";
}
unset ($students[1],$students['def']);
#echo "<pre>";
#print_r($students);
foreach ($students as $key => $value){
    echo "$key $value <br>";
}
#echo "</pre>";