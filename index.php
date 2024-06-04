<?php

$pdo = new PDO("mysql:dbname=test;host=127.0.0.1:3306", "root", "");

$sql = $pdo->query('SELECT * FROM usuario');