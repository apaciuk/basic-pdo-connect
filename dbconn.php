<?php
print_r(PDO::getAvailableDrivers());

//Local Server Details

$hostname = "localhost";
$username = "root";
$password = "amex";
$db = "app";

//Check conn

try {

$handle = new PDO("mysql:host=$hostname;dbname=$db", "$username", "$password");
$handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connected";
} catch(PDOException $e) {
die("It messed up");
echo ($e->getMessage());
}


