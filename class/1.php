#!/usr/bin/php
<?php
class A{
    static $st = 'abc';
    public $var = 'init';
    function foo(){
    	if (isset($this)) {
	    echo '$this is defined(';
	    echo get_class($this);
	    echo ")\n";
	}else{
	    echo "\$this is not defined.\n";
	}
    }
}

class B {
    function bar(){
	A::foo();
    }
}

$a = new A();
echo A::$st . "\n";
echo $a::$st . "\n";
$a->foo();

A::foo();
$b = new B();
$b->bar();

B::bar();

$ins = new A();
$ass = $ins;
$ref = &$ins;
$ins->var = '$ass will have this value';

$ins = null;

//var_dump($ins);
//var_dump($ref);
//var_dump($ass);

class Test {
    public $var = 'init';
    static public function getNew() { return new static;}
}

class Child extends Test {}

$obj1 = new test();
$obj1->var = 'obj1';
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
echo $obj1->var . ' ' . $obj2->var . "\n";

$obj3 = test::getNew();
//var_dump($obj3 instanceof Test);

echo $obj3->var . "\n";

$obj4 = Child::getNew();
//var_dump($obj4 instanceof child);

$obj4->var = 'obj4';
$obj5 = new $obj4;
//var_dump($obj5 instanceof child);
echo $obj5->var . "\n";

echo <<<"FOOBAR"
hello world!\n
FOOBAR;

echo <<<'EOT'
My name is "$name". 
EOT;

$juice = 'apple';

echo "\nHe drank some $juice juice.\n";
echo "He drank some juice made of ${juice}s.\n";
$name='orange';
$orange='hha';
$hha='test';
echo "This is name $name. ${${$name}}\n";
echo "Line\n";

class foo{
	public $bar=<<<EOT
bar
EOT;
}

$f = new foo();
echo $f->bar . "\n";

$array = [1, 2, 3, 4, 5];
//print_r($array);

foreach($array as $i => $value) unset($array[$i]);

//print_r($array);

$array[] = 6;
//print_r($array);

$array = array_values($array);
$array[] = 7;
//print_r($array);

$a = 1;

function test(){ 
  static  $a = 0;
  echo $a++ . "\n";
  if ($a < 10)
	test();
  $a--;
}
test();

$a = 'hello';
$$a = 'world';
$a = 'hhh';
$hhh = 'abc';
echo "$a ${$a}" . "\n". $$a . "\n" . $hello . "\n";


?>
