<?php

$dbhost = "localhost";
$dbuser = "id5387655_root";
$dbpass = "password";
$dbname = "id5387655_liubiks";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error) {
    die("Error conexión BBDD " . $error->getMessage());
}
?>