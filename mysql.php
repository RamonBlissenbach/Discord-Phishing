<?php
$host = "localhost";
$name = "Enter database name!";
$user = "Enter username!";
$passwort = "Enter password";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
?>