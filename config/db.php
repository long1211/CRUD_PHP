<?php

// Enable us to use Headers
ob_start();

// Set sessions
if (!isset($_SESSION)) {
    session_start();
}

$hostname = "localhost";
$username = "phpDB";
$password = "1234567890";
$dbname = "employees";

$link = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
