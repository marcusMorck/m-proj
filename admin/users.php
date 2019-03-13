<?php
require_once '../config.php';

$dsn = "mysql:host=" . $config['host']. ";dbname=". $config['db'] .";charset=" . $config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password']);

$stmt = $pdo->prepare('SELECT * FROM users');
$stmt->execute();
$users = $stmt->fetchAll();

foreach ($users as $user){
    ?>
    <table>
        <tr>
            <td><?= $user['name'];?></td>
            <td><?= $user['lastname'];?></td>
        </tr>
    </table>
    <?php
}









?>