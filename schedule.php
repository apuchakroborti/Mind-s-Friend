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


$sql = "INSERT INTO scheduler (se_time,avail)
    VALUES ('$Date','available')";

$result = $conn->query($sql);

$conn->close();


?>