<?php
/* quản lý các thông tin của sinh viên
sv1 name, sex, scorce
*/
$students = array();
$students["SV001"] =array("name" =>"John","sex" => 1,"score" =>array(4,5,6));
$students["SV002"] =array("name" =>"peter","sex" => 1,"score" =>array(7,5,6));
$students["SV003"] =array("name" =>"mary","sex" => 0,"score" =>array(8,9,10));
$students  =array(
    "SV001" => array("name" =>"John",
                      "sex" => 1,
                      "score" =>array(4,5,6)
                    ),
     "SV002" => array("name" =>"peter",
                      "sex" => 1,
                      "score" =>array(7,5,6)
                      ),
    "SV003" => array("name" =>"mary",
        "sex" => 0,
        "score" =>array(8,9,10)
                      ),
);
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<pre>";
print_r($students);
echo "</pre>";

//tên của sinh viên SV002
echo $students["SV002"]["name"] ."<br>";

//điểm môn thứ 2 của SV003
echo $students["SV003"]["score"][1] ."<br>";

//thay đổi tên cuaer SV003 thành anne
 $students["SV003"]["name"] = "Anne";
//thay đổi điển của SV003 môn t2 thành 10
 $students["SV003"]["score"][1] = 10;
echo "<pre>";
print_r($students);
echo "</pre>";



$score = array(6,7,8,5);
$tong=0;
for($i=0;$i<count($score);$i++){
    $tong +=$score[$i];
    echo $tong;
}
 //thông tin của các sinh viên và tổng số điểm của sinh viên đố
//ví dụ: john-boy-15
//peter-boy-18
if(!empty($students)){
    foreach($students as $key => $value){
      $name =  $value["name"] ;
      $sex =  ($value["sex"]==1)? "Boy" :"Girl" ;
     // $score = $value["score"];
    /* cách 1 tính tổng trong array
     $total = 0;
      for($i =0;$i<count($score);$i++){
          $total += $score[$i];
      }*/
    //cách 2:
        $score = array_sum($value["score"]);
      echo "Name: " .$name ." -sex: " .$sex . " -score ". $score . "<br>";
    }
}