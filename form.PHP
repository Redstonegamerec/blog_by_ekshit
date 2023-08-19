<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','messages');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, email, contact, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $firstName, $lastName, $email, $contact, $number ,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>