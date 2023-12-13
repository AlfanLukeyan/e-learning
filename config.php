<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "pweb-fp";
$socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock"; // replace with the actual path

$db = new PDO("mysql:unix_socket=$socket;dbname=$database", $username, $password);
?>
