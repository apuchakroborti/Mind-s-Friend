<?php

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


$sql = "SELECT * FROM scheduler";

$result = $conn->query($sql);


while($row = $result->fetch_assoc())
{
    echo $row["se_time"]." ".$row["avail"]. "\n";
}

$conn->close();


?>