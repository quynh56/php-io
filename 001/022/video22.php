<?php
/*$coures = array();
$coures["php"]="PHP"; //0
$coures["zend"]= "Zend Framework"; //1
$coures["joomla"]="Jooma"; //2
$coures[0] ="Item1";
$coures[1] ="Item1";*/
$coures =array("php" => "PHP" ,"zend" => "zend famework","joomla" => "Jooma",0 => "Item1",1 => "Item1");
//$coures = array();
echo"<pre>";
print_r($coures);
echo"</pre>";
echo $coures["zend"];
echo $coures[1];
if(!empty($coures)){
    foreach ($coures as $key =>$value){
        echo $key . " : " . $value ."<br>";
    }
}

