#!/usr/bin/php
<?php
//$file = fopen("welcome.txt", "r+") or die("Unable to open file!");
if(!file_exists("welcome.txt"))
  die("File not Found\n");
else
  $file = fopen("welcome.txt", "a+");
fputs($file, "Welcome to here\n");
echo $file, "\n";
fseek($file,0);
while (!feof($file)) 
echo fgets($file),"\\";
//echo "\n";

?>
