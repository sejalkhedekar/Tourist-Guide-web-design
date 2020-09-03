<?php
$Username = $_POST['Username'];
	$email = $_POST['email'];
	$password= $_POST['password'];
	$password1 = $_POST['password1'];
	

	// Database connection
	$conn = new mysqli('localhost','root','root','nature','3307');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register (Username,email, password, password1) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Username, $email, $password, $password1);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
    ?>