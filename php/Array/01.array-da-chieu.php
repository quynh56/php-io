<?php
$cars =array
(
    array("volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,3),
    array("Land",17,15)

);
for($row =0; $row<4;$row++){
    echo" row number $row";
    echo "<ul>";
    for ($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
}