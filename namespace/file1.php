<?php
namespace Foo\Bar\subnamespace;
const FOO = 1;
function foo() {
	echo __METHOD__."<br>";	
}
class foo{
	static function staticmethod(){
	echo __METHOD__."<br>";
}
}
?>
