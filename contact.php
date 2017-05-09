<?php
$name = $_GET["name"];
$email = $_GET["email"];
$subject = $_GET["subject"];
$message = $_GET["message"];

echo $name.$email.$subject.$message;

// send email
mail($email, $subject,$message);

echo "<meta http-equiv='refresh' content='3;contact.html' />";


?>