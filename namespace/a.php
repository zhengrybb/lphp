<?php
  namespace A {
	const CR = "<br>";
	const WHERE_I_AM = 'I am in A';
	
	function cr_echo($msg){
		echo $msg . CR;
	}
	
	function i_am_in() {
		cr_echo(WHERE_I_AM);
	}
	//require 'c.php';
	require 'b.php';
}
//namespace B{
//	require 'b.php';
//}

namespace C{
	//require 'c.php';
//	require 'b.php';
	
	//echo 'test';
	phpinfo();
	\A\i_am_in();

	\C\i_am_in();

	\i_am_in();
}
?>
