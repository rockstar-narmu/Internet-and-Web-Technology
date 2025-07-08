<?php
$servername = "localhost";
$username = "root";
$password = "Rockstar*420"; // If you set a MySQL password, put it here
$dbname = "formDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
