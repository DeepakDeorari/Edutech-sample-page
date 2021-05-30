<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user_details (name, email, password) VALUES ('$name', '$email', '$password')";

$r = $conn->query($sql);

if($r) {
	echo "<script>
		window.alert('your registration is successful');
	</script>";
header("location: login.php");
} else {
	echo "<script>
		window.alert('Unsuccessful to register you. Please try again');
	</script>";
}

?>

