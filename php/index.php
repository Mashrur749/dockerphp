<?php

$host = 'db'; //service name from the docker-compose.yml
$user = 'root';
$password = 'root';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
    echo 'connecting failed ' . $conn->connect_error;
}

echo json_encode(array(
    "res" => "php response"
))


?>