<?php
$score = array(2,3,4,5,1,3,7,8);
$newArr = array_count_values($score); // thống kê các phần tử xuất hiện bao nhiêu lần trong mảng
$sum =array_sum($score);
$length =count($score);
$max= max($score);
$min =min($score);
echo "<pre>";
print_r($score);
echo "</pre>";
echo "<pre>";
print_r($newArr);
echo "</pre>";
echo "trung bình cộng: " . $sum/$length ."<br>";
echo "tổng: ". $sum ."<br>";
echo " Max: " . $max ."<br>";
echo "Min: " . $min ."<br>";
