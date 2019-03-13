<?php
session_start();

if (!isset($_POST['username'], $_POST['password'] )){
    //Redirect to login page with error message
    //Redirect to 404 page
    die ('Please fill both the username and password field!');
}

require_once 'config.php';

$dsn = "mysql:host=" . $config['host']. ";dbname=". $config['db'] .";charset=" . $config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password']);

$stmt = $pdo->prepare('SELECT id, password_hash, role FROM users WHERE name = ?');
$stmt->execute([$_POST['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(password_verify($_POST['password'], $user['password_hash'])){
    if($user['role'] === 'admin'){
        header('Location: admin/admin.php');
        exit();
    }
    else if($user['role'] === 'user') {
        header('Location: index.php');
        exit();
    }
}
else{
    //Redirect to login with error message
    echo 'Wrong password or username';
}


?>