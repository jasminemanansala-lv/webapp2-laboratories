<?php 

$host = 'localhost';
$username = 'root';
$password = 'root1234';
$db_name = 'webapp2_database';

$dsn = "mysql:host=$host; dbname=$db_name; charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
    $pdo = new PDO($dsn, $username, $password, $options);

    if($pdo){
        echo "Connected to the $db_name successfully!";
    }
} catch (PDOException $e){
    echo $e->getMessage();
}

?>