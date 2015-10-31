<?php
$arr1 = array("a" => 1, "b" => 2, "c" => 3);
$arr2 = array("x" => 4, "y" => 5, "z" => 6);
foreach($arr1 as $key => &$val) {echo $key . "=>" . $val . "<br>";}
//unset($val);
foreach($arr2 as $key => $val) {echo $key . "=>" . $val . "<br>";}

foreach($arr1 as $key => $val) {echo $key . "=>" . $val . "<br>";}

foreach($arr1 as $key => $val) {echo $key . "=>" . $val . "<br>";}
var_dump($arr1);
echo '<br>';
var_dump($arr2);
?>
