#!/usr/bin/php
<?php
class A{
   public static function who(){echo __class__, "\n";}
   public static function test(){static::who();}
   private function foo(){echo "success\n";}
   public function test1(){$this->foo();static::foo();}
}

class B extends A{
  public static function who(){ echo __class__, "\n";}
}

class C extends A{
   private function foo(){echo "from c\n";}
}
B::test();

$b = new B();
$b->test1();
$c = new C();
$c->test1();
?>
