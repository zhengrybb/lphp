#!/usr/bin/php
<?php
namespace Foobar;

class Foo{
	function bar(){echo 'test';}
	static public function test($name){
		print '[['.$name . ']]';
	}
}

spl_autoload_register(__NAMESPACE__.'\Foo::test');

$f = new Fo;
echo $f->bar() , "\n";
?>
