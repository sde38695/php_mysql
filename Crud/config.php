<?php


$server = 'localhost';
$dbname = 'db';
$username = 'root';
$password = '';


try{
    $connect = new PDO("mysql:host=$server; dbname=$USERS", $username,$password);
}catch(Execption $e){
    echo "Something went wrong";
}


?>