<?php
ini_set( 'display_errors', true );

require_once 'config.php';
include 'header.php';

$dsn= "mysql:host=" . $config['host']. ";dbname=". $config['db'] .";charset=" . $config['charset'];

/*
try{
    // create a PDO connection with the configuration data
    $conn = new PDO($dsn, $config['user'], $config['password']);
    
    // display a message if connected to database successfully
    if($conn){
    echo "Connected to the <strong>" . $config['db']."</strong> database successfully!";
           }
   }catch (PDOException $e){
    // report error message
    echo $e->getMessage();
   }
*/

   $conn = new PDO($dsn, $config['user'], $config['password']);
   $sql = "SELECT * FROM users";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   
   /* Exercise PDOStatement::fetch styles */
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   print_r($result);
   print("\n");
   
   /*
   $sql = "SELECT * FROM users";
   $stmt = $conn->prepare($sql);
   $stmt = $stmt->execute();
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
  



*/
?>