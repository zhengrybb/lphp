<?php
namespace test {
	echo __NAMESPACE__, "<br>";
}

namespace test\test1{
 	echo __NAMESPACE__, "<br>";
	var_dump(FalsE);
	
	function testfunc(){
		define("CT", 1);
		echo CT;
	}
	testfunc();
}
?>
