<?php
trait Counter {
    public function inc() {
	static $c = 0;
	$c += 1;
	echo "$c\r\n";
    }
    public static function doSomething() {
	return 'Doing something';
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

$o = new C1(); $o->inc();
echo C1::doSomething();
echo $o::doSomething();
$p = new C2(); $p->inc();

?>
