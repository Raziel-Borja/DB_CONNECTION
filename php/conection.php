<?php
$server = 'localhost';
$user = 'root';
$password = '';

$conn = new PDO("mysql:host=$server; dbname=fast_fix_dev", $user, $password);
        //CONFIGURATE VARIABLES IN CASE OF ERRORS
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>