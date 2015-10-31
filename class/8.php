#!/usr/bin/php
<?php
class A{ public $foo = 1;}

$a = new A;
$b = $a;
$c = &$a;
$a = new A;
var_dump($a);
var_dump($c);
unset($a);
$a = new A;
$a->foo = 3;
var_dump($c);
$d = $c;
var_dump($d);
?>

