<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=hw44;charset=utf8', 'root', 'mysql');
} catch (PDOException $e) {
    print 'Error!: ' . $e->getMessage() . '<br/>';
    die();
}

