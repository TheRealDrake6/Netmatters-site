<?php
require_once 'pdoconfig.php';
$query = "SELECT * FROM news";
try {
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
// echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
die ("Could not connect to the database $dbname :" . $pe->getMessage());
}

$statement = $conn->prepare($query);

$statement->execute();

$results=$statement->fetchAll();

// var_dump($results);