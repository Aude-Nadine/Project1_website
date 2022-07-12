<?php

$meal1 = $_REQUEST['meal1'];

$username = "php_website_admin";
$password = "Winter2017*#";
$host = "localhost";
$database = 'food plan';

$connection = new mysqli($meal1, $username, $password, $host, $database);
if ($connection->connect_error) {
    echo "connection failed" . $connection->connect_error;
}

$result = $connection->query('select * from meals');


$statement = $connection->prepare("insert into users(times, meal1, meal2, meal3) value (?, ?, ?, ?)");
$statement->bind_param("ssss", $breakfast, $snacks, $lunch, $dinner);
$statement->execute();

if ($statement->error) {
    echo "error executing statement";
}

header('Location: ./personal.php');
