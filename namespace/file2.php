<?php
namespace Foo\bar{
include "file1.php";
echo 'test', "\r\n";
function foo(){
	echo __METHOD__."<br>";
}

class foo{
	static function staticmethod(){
		echo __METHOD__."<br>";
	}
}

foo();
foo::staticmethod();
subnamespace\foo();
subnamespace\foo::staticmethod();
}

namespace Foo\bar\subnamespace{
	foo();
	foo::staticmethod();
}

?>
