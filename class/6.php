#!/usr/bin/php
<?php
class MyIterator implements Iterator{
  private $var = [];
  public function __construct($array){
    if (is_array($array))
	$this->var = $array;
  }

  public function rewind(){
    echo "rewinding\n";
    reset($this->var);
  }

  public function current(){
    $var = current($this->var);
    echo "current: $var\n";
    return $var;
  }

  public function key(){
    $var = key($this->var);
    echo "key: $var\n";
    return $var;
  }

  public function next(){
    $var = next($this->var);
    echo "next: $var\n";
    return $var;
  }

  public function valid(){
    $var = $this->current() !== false;
    echo "valid: {$var}\n";
    return $var;
  }
}

class MyCollection implements IteratorAggregate{
  private $items = [];
  private $count = 0;
  public function getIterator(){ return new MyIterator($this->items);}
  public function add($value){$this->items[$this->count++] = $value;}
}

$values = [1, 2, 3];
$it = new MyIterator($values);
//foreach($it as $a => $b)
//  echo "$a: $b\n";

$coll = new MyCollection();
$coll->add('Value 1');
$coll->add('value 2');
$coll->add('value 3');
foreach($coll as $key => $value)
  echo "key/value: [$key -> $value] \n\n";

function gen_one_to_three(){
  for($i = 1; $i <= 3; $i++) yield $i;
}

$g = gen_one_to_three();
foreach($g as $val)
	echo "$val\n";


class A{
//  public $b;
  public $name;
  public $b;
 /* 
  public function __wakeup(){
    var_dump($this->name);
  }*/
}
class B extends A{
  public $parent;
  public function __wakeup(){
    var_dump($this->parent->name);
  }
}

$a = new A();
$a->name = 'foo';
$a->b = new B();
$a->b->parent = $a;
$s = serialize($a);
var_dump($s);

$aa = unserialize($s);

class A1 {
  private $privated;
}
class AA extends A1 {
    public $var1;
    public $var2;
    protected $var3;
    private $var4;
    public static function __set_state($an_array){
	$obj = new AA();
	$obj->var1 = $an_array['var1'];
	$obj->var2 = $an_array['var2'];
	return $obj;
    }
}

$a = new aa;
$a->var1 = 5;
$a->var2 = 'foo';

eval('$b='. var_export($a, true). ';');
echo var_export($a, true) . "\n\n";
var_dump($b);

class C{
  private $prop;
  public function __construct($val){$this->prop = $val;}
  public function __debugInfo(){
    return ['propSquared' => $this->prop ^ 2,];
  }
}

var_dump(new C(42));
echo 42*2 , "\n";
?>
