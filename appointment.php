<?php

$Date = $_GET["value"];

//$Date = "a b c 2017-05-09T13:30:00 2017-05-09T16:30:00";

$Date = explode(" ", $Date);

$name = $Date[0];
$email = $Date[1];
$num = $Date[2];
$se_time = $Date[3]." ".$Date[4];



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

$sql = "UPDATE scheduler SET avail='unavailable' WHERE se_time='$se_time' ";
$result = $conn->query($sql);
$sql = "UPDATE scheduler SET name='$name' WHERE se_time='$se_time' ";
$result = $conn->query($sql);
$sql = "UPDATE scheduler SET email='$email' WHERE se_time='$se_time' ";
$result = $conn->query($sql);
$sql = "UPDATE scheduler SET number='$num' WHERE se_time='$se_time' ";
$result = $conn->query($sql);

$conn->close();




?>