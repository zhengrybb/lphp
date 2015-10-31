#!/usr/bin/php
<?php
$servername = 'localhost';
$username = 'root';
$password = 'above89050';
$dbname = 'myDBPDO';
try{
//$conn = new PDO("mysql:host=$servername", $username,$password);
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$sql = "create database $dbname";
/*$sql = "Create Table myGuests(
id int unsigned AUTO_INCREMENT primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
email varchar(50),
reg_date timestamp)";
$stmt = $conn->prepare("Insert into myGuests(firstname, lastname, email)
values(:firstname,:lastname,:email)");
$stmt->bindParam(':firstname',$firstname);
$stmt->bindParam(':lastname',$lastname);
$stmt->bindParam(':email',$email);

$firstname='John';
$lastname='Doe';
$email='John@example.com';
$stmt->execute();

$firstname='Mary';
$lastname='Moe';
$email='mary@example.com';
$stmt->execute();
//$conn->exec($sql);*/

//echo "Table created successfully\n";


}catch(PDOException $e){
  echo $sql . "\n" . $e->getmessage(), "\n";
}
$conn = null;
?>
