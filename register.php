<form method="post" action="registercheck.php">
    <label>name</label>
    <input type="text" name="name">
    <label>lastname</label>
    <input type="text" name="lastname">
    <label>email</label>
    <input type="email" name="email">
    <label>password</label>
    <input type="password" name="password">
    <label>role</label>
    <input type="role" name="role">
    <input type="submit" name="submit" value="Submit" >
</form>

<?php


$timeTarget = 0.05; // 50 milliseconds 
$cost = 8;
do {
    $cost++;
    $start = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
    $end = microtime(true);
} while (($end - $start) < $timeTarget);

echo "Appropriate Cost Found: " . $cost;