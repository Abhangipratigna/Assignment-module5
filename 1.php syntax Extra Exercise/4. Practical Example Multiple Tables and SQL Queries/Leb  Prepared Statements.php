<?php
// Database connection
$mysqli = newmysqli("localhost", "username", "password", "database_name");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("SELECT id, name, email FROM users WHERE id = ?");
$stmt->bind_param("i", $id); 

$id = 1;

$stmt->execute();

$stmt->bind_result($id, $name, $email);

while ($stmt->fetch()) {
    echo "ID: $id, Name: $name, Email: $email<br>";
}

$stmt->close();
$mysqli->close();
?>
