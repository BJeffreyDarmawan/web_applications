<?php

// change the value of $dbuser and $dbpass to your username and password
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = ‘’;
$dbname = 'pramana';
// $table = 'account';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
}

?>
