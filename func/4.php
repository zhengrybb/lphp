#!/usr/bin/php
<?php
class A{ public $msg = 1;}
$message = "hello";
$a = new A;

function dumphello(){
//	var_dump($message);
}

//dumphellp();
$a->msg = 3;
$ex = function()use(&$a) { var_dump($a); $a=null;};
$ex();
//var_dump($a);
//$message  = 'world';
//$a->msg = 2;
$ex();
?>
