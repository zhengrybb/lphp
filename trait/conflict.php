<?php
trait A {
    public function smallTalk(){ echo 'a';}
    public function bigTalk() { echo 'A';}
}

trait B {
    public function smallTalk() { echo 'b';}
    public function bigTalk() { echo 'B';}
}

class Talker {
    use A, B {
	B::smallTalk insteadof A;
	A::bigTalk insteadof B;
	B::bigTalk as Talk;
    }
}

$a = new Talker();
$a->smallTalk();
$a->bigTalk();
$a->talk();
?>
