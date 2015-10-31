<?php
namespace BaseNS {
  class Base {
	public function SayHello() {
		echo "Hello ";
	}
  }
  
  trait SayWorld {
	public function sayHello() {
		parent::sayHello();
		echo "World!";
	}
  }
}

namespace ExtNS {
  class MyHelloWorld extends \BaseNs\Base {
	public function sayHello() {
		echo "Say Universe!";
	
	use \BaseNS\SayWorld;
  }
}

namespace {
  $o = new ExtNs\MyHelloWorld();
  $o->sayHello();
}

?>
