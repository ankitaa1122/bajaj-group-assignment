<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter actual password if there is one
$dbname = "bajaj_contact";

// Use correct variable $dbname instead of string
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>