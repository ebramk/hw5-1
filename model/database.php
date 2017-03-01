<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=er86';
    $username = 'er86';
    $password = 'MMA6gsP3';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
