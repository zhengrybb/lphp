<?php

trait Foo1 {
    final public function hello($s) { echo "$s, Hello!";}
}

class Bar1 {
    use Foo1;
   // final public function hello($s) { echo "hello, $s!";}
}

abstract class FOO{
    final public function hello($s) { echo "$s, hello!";}
}

class BAR extends Bar1{
	final public function hello($s) { echo "hello, $s!";}
}

?>
