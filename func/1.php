<?php
  foo();
  function foo(){ echo 'test<br>';}
  
  function rec($a){
	if ($a < 20){
	  echo "$a ";
	  rec($a + 1);
	}
  }
  
  rec(1);
?>
