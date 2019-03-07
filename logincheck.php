<?php
session_start();


if (! empty($_POST)){
    if (isset($_POST['username']) && isset($_POST['password']) ){
        require_once 'config.php';

        $dsn = "mysql:host=" . $config['host']. ";dbname=". $config['db'] .";charset=" . $config['charset'];
        $conn = new PDO($dsn, $config['user'], $config['password']);

        $data = $conn->query("SELECT * FROM users")->fetchAll();

        foreach ($data as $row){
            if($row['name'] === $_POST['username']){ //Check if user exists

                $password = $row['password_hash'];

            if(password_verify($_POST['password'], $password)){
                $_SESSION['user_id'] === $row['id'];
            }
            else{
            echo "not logged in";
            }      
            }
            else if ($row['name'] != $_POST['username']){
                //redirect user to loginpage with error message
            }
        }
    
    }
}



?>