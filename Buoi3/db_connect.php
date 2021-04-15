<?php
$server = "us-cdbr-east-03.cleardb.com";
$username = "b8668b2601010c";
$password = "25f63561";
$db = "heroku_bc51814bd73e2d5";
// Create connection
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>