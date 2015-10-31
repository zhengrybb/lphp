#!/usr/bin/php
<?php
  header("Content-type:text/plain");

class Foo {
  private $name;
  private $link;
  public function __construct($name){
    $this->name = $name;
  }

  public function setlink(Foo $link){
    $this->link = $link;
  }

  public function __destruct(){
    echo "Destroying: ", $this->name, "\n";
  }
}

$foo = new Foo('Foo 1');
$bar = new Foo('Foo 2');

$foo->setlink($bar);
$bar->setlink($foo);

$foo = null;
$bar = null;

gc_collect_cycles();

$foo = new Foo('Foo3');
$foo = new Foo('foo4');

$foo = null;
$bar = null;

echo ' End of script', "\n";
?>
