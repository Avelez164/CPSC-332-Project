<?php
$hostName = 'localhost'; //adjust 
$userName = 'username';
$password = 'password';
$dbName = 'dbname';

$link = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$link) {
    die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully<p>';
