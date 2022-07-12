<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$goalWeight = $_POST['goalWeight'];
$job = $_POST['job'];
$walking = $_POST['walking'];
$cycling = $_POST['cycling'];
$gym = $_POST['gym'];
$otherActivity = $_POST['otherActivity'];
$sleep = $_POST['sleep'];


$conn = new mysqli('localhost', 'php_website_admin', 'Winter2017*#', 'form');
if ($conn->connect_error) {
    die('Connection Failed : ' . $connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(fullName, email, age, height, weight, goalWeight, job, walking, cycling, gym, otherActivity, sleep)
    values(?, ?, ?, ? ?, ?, ?, ? ?, ?, ?, ?)");
    $stmt->bind_param("ssiiiiiiiiii", $fullName, $email, $age, $height, $weight, $goalWeight, $job, $walking, $cycling, $gym, $otherActivity, $sleep);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}
