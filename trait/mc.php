<?php
trait TestTrait {
    public function testMethod() {
	echo "Class:" . __CLASS__ . "<br>";
	echo "Method:" . __METHOD__. "<br>";
	echo "Trait:" . __TRAIT__ . "<br>";
	//echo $this->v . "<br>";
    }
}

class BaseClass {
    use TestTrait;
    private $v = 'tttttTTTT';
    public function test(){ $this->testMethod(); echo $this->v . "<br>"; }
}

class TestClass extends BaseClass {}

$t = new TestClass();
//$t->testMethod();
$t->test();
TestTrait::testMethod();

trait Call_Helper {
  public function __call($name, $args) {
	$v='';
	foreach($args as $k => $a) $v = $v . $k . '=>' . $a;
	return $name . count($args) . $v; 
  }
}

class Foo{
  use Call_helper;
  public function go1() { echo 'go______';}
}

$foo = new Foo();
echo $foo->go(1,2,3,4);
echo $foo->go1();
?>
