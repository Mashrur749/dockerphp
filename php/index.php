<?php

$host = 'db'; //service name from the docker-compose.yml
$user = 'root';
$password = 'root';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
    echo 'connecting failed ' . $conn->connect_error;
}

echo 'successfully connected to mysql'



?>