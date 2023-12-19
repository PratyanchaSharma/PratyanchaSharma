<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'test1';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}