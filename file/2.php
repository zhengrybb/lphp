#!/usr/bin/php
<?php
function customError($errno, $errstr, $errfile, $errline,$errcnt){
echo "Error: [$errno] $errstr\n";
echo "ErrFile: $errline in $errfile\n";
//echo var_dump($errcnt);
echo "ending script\n";
die();
}
//set_error_handler("customError");

//$file = fopen('abc.txt', 'r');
trigger_error("Value Must be 1 or below\n", E_USER_WARNING);
echo "ttt\n";
?>
