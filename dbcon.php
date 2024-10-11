<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "kierdb");

$connection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// If no error, connection is successful
echo "Connected successfully";
?>
