<?php

require_once 'config.php';
$dsn= "mysql:host=" . $config['host']. ";dbname=". $config['db'] .";charset=" . $config['charset'];
$conn = new PDO($dsn, $config['user'], $config['password']);

$options = [
    'cost' => 9,
];

$hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

$data = [
    'name' => $_POST['name'],
    'lastname' => $_POST['lastname'],
    'email' => $_POST['email'],
    'password_hash' => $hashedPassword,
    'role' => $_POST['role']
];

$stmt = $conn->prepare ("INSERT INTO users (name, lastname, email, password_hash, role) VALUES (:name, :lastname, :email, :password_hash, :role)");

$stmt->execute($data);







?>