<?php

$connect = mysqli_connect('localhost', 'root', '', 'test');


$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
if(!$connect) {
    die('Error connect to database');
}

