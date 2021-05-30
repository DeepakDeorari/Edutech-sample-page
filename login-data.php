<?php

include 'connect.php';
$username =  $_POST['email'];
$password = $_POST['password'];

echo $username . " " . $password;

$sql = "SELECT password FROM user_details WHERE email=$username";

$r = $conn->query($sql);

if ($r) {
	header("location: index.html");
} else {
	header("location: index.html");
}

?>
