<?php

$host = "lampdb.c3qiuqmi6jq1.ap-south-1.rds.amazonaws.com";
$user = "admin";
$pass = "YOUR_PASSWORD";
$db = "lampapp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

echo "<h1>LAMP Application Hosted on AWS</h1>";

while($row = $result->fetch_assoc()) {
    echo $row["name"] . " - " . $row["email"] . "<br>";
}

$conn->close();

?>
