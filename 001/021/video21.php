<?php
//cách 01
$coures = array();
$coures[]="PHP"; //0
$coures[]= "Zend Framework"; //1
$coures[]="Jooma"; //2

//cách 2
$coures = array();
$coures[0]="PHP";
$coures[1]= "Zend Framework";
$coures[2]="Jooma";

//cách 3
$course = array("php","zend framework","jooma");
echo "<pre>";
print_r($course);
echo "</pre>";
if(!empty($course)){
    foreach($course as $key => $value){
        echo $value ."<br>";
    }
}
//echo $course[1] ."<br>";
for($i = 0; $i<count($course);$i++){
    echo $course[$i] ."<br>";
}