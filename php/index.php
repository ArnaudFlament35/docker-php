<?php 
require_once 'connect.php';

$sql = 'SELECT * FROM `clients`;';

$query = $pdo->query($sql);
var_dump($query->fetchAll());