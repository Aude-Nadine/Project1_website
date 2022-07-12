<?php
$newsletter = $_POST['newsletter'];

$connection = new mysqli('localhost', 'php_website_admin', 'Winter2017*#', 'newsletter');
if ($connection->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("input(email) values(?)");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    echo "submission successful";
    $stmt->close();
    $conn->close();
}
