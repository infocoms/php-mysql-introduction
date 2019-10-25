<?php

function openConnection() {
$pdo = new PDO('mysql:host=localhost;dbname=becode', 'user', 'user');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    return $pdo;
}









