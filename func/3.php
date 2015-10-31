#!/usr/bin/php
<?php
//declare(strict_types=0);
class C {}
class D extends c {}
interface I { }
class E implements I {}

function f(I $c){
	echo get_class($c) . "\n";
}

class Foo {
    public $Var= 'Static property';
	static $var1 = 'sss';
    static function Variable(){
//    	$name = "bar";
//	$this->$name();
//	echo 'Method' . "\n";
	return 'method';
    }
    function Bar() { echo "This is Bar" . $this->Var. "\n"; }
    function test() {
	$v = 'bar';
	$this->$v();
    }
}
echo Foo::$var1;
$foo = new Foo();
$foo->Bar();
//echo $foo->Variable . "\n";
//$Variable = 'Variable';
//echo $foo->$Variable . "\n";

//$func = array("Foo", 'Bar');
//$func();

$f = array(new Foo, 'bar');
$f();
$foo->test();
//$f = 'Foo::Variable';
//$f();
?>
