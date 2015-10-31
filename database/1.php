#!/usr/bin/php
<?php
$servername = 'localhost';
$username = 'root';
$password = 'above89050';
$conn = new mysqli($servername, $username,$password);
if ($conn->connect_error)
   die("Connection failed: " . $conn->connect_error . "\n");
echo "connected successfully\n";
$conn->close();
try{
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  echo "Connected successfully\n";
}catch(PDOException $e){
  echo $e->getMessage() , "\n";
}
$conn=null;
?>
