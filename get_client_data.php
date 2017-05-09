<?php

$Date = $_GET["value"];


$servername = "localhost";
$username = "psyhelp";
$password = "psyhelp";
$dbname = "psyhelp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM scheduler WHERE se_time='$Date' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo $row['name']." ".$row['email']." ".$row['number'];


$conn->close();




?>