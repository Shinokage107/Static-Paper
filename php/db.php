<?php
$user = $_ENV['DB_USER'];
$dbname = $_ENV['DB_NAME'];
$pass = $_ENV['DB_PW'];
$url = $_ENV['DB_URL'];

$con = new mysqli($url, $user, $pass, $dbname) or die("Something went wrong!");