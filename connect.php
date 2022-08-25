<?php
	$firstName = $_POST['firstName'];
	
	$password = $_POST['password'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(firstName,password) values( ?,?)");
		$stmt->bind_param("ss", $firstName,$password);
		$execval = $stmt->execute();
		
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registrated Succesfully ');
    window.location.href='http://localhost/enterpreneur/login.html';
    </script>");
$stmt->close();
		$conn->close();
	}
?>