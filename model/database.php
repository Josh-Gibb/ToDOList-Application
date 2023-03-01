<?php
$dsn = "mysql:host=localhost; dbname=todolist";
$username = 'occha28tsr7pfoz4';
$password = 'ldlf8elj4xbmwqtb';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = "Database Error!";
    $error_message .= $e->getMessage();
    include('view/error.php');
    exit();
}
?>
