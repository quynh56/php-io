<?php
$course =array("PHP","Joomla","Zend");
echo "<pre>";
print_r($course);
echo "</pre>";
echo "Current: " .current($course). "<br>";
echo "Next: " .next($course). "<br>";
echo "Current: " .current($course). "<br>";
echo "Next: " .next($course). "<br>";
//lui vee 1 phan tu
echo "Previous: " .prev($course). "<br>";
echo "Reset: " .reset($course). "<br>";
echo "End: " .end($course). "<br>";
