#!/usr/bin/php
<?php
class A {
	public $var1  = 1;
	protected $var2 = 2;
	private $var3 = 3;
	static $var4= 4;
	public function toArray(){return (array)$this;}
}

$t = new A();
print_r($t->toArray());
?>
