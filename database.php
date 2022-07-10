<?php
$servername = "localhost";
$database = "catalystit";
$username = "root";
$password = "Francis@123";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo 'Connected-successfully';

mysqli_close($conn);

?>