#!/usr/bin/php
<?php
$servername = 'localhost';
$username = 'root';
$password = 'above89050';
$dbname = 'test';
$conn = new mysqli($servername,$username,$password, $dbname);
if ($conn->connect_error)
  die("Conection failed: " . $conn->connect_error);
$sql = "create table myGuests(
id int(6) unsigned auto_increment primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
email varchar(50),
reg_date TIMESTAMP)";
if ($conn->query($sql) === true)
  echo "Table MyGuests created successfully\n";
else
  echo "Error createing table: " . $conn->error . "\n";
$conn->close();
?>
