<?php
$servername = "bart.go-ao.be";
$username = "bart";
$password = "bart";
$database = "naam_van_database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT username FROM php_oefening WHERE id=2");
$stmt->execute();

$records = [];
while ($result = $stmt->fetch()) {
    $records[] = $result;
}
var_dump($records);
?>