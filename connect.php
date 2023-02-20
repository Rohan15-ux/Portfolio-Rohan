<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$textFloatingarea = $_POST['textFloatingarea'];

	// Database connection
	$conn = new mysqli('localhost','root','root','student_management');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into req(name, email, message) values(?,?,?)");
		$stmt->bind_param("sssssi", $name,$email,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>