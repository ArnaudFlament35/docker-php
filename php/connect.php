<?php 

const DB_HOST = 'db';
const DB_USER = 'test';
const DB_PASS = 'pass';
const DB_NAME = 'demo';

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    echo 'Connected to MySQL';
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}