#!/usr/bin/php
<?php
class Emp{
  public $name = '';
  public $hobbies = '';
  public $birthdate = '';
}

$e = new Emp;
$e->name = 'sachin';
$e->hobbies = 'sports';
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03 p"));
echo json_encode($e), "\n";
$s = json_encode($e);
var_dump(json_decode($s));
var_dump(json_decode($s, true));
$s = '{"a":1,"b":{"c":3,"d":{"e":4}}}';
var_dump(json_decode($s));
var_dump(json_decode($s,true));
$o = json_decode($s);
echo $o->b->c , "\n";
?>
