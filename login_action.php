<?php
include "connect.php";

	$user = $_POST["user"];
	$password = $_POST["password"];

	$sql = 'SELECT * FROM users WHERE users.email = :name';
	$stmt = $CONN->prepare($sql);
	$stmt->bindParam(':name',$user);
	
	$result = $stmt->execute();
	if(!$result){
		$_SESSION['errors'] = ["An error occured when accessing the database"];
		header('Location: http://cgi.soic.indiana.edu/~arhickox/admin_login.php');
		die();
	}

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$row = $stmt->fetch();

	if(password_verify($password,$row["password"])){
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['user_name'] = $row['name'];
		$_SESSION['user_email'] = $row['email'];
		header('Location: http://cgi.soic.indiana.edu/~arhickox/admin_features.php');
	}
	else {
		$_SESSION['errors'] = ["Incorrect username or password"];
		header('Location: http://cgi.soic.indiana.edu/~arhickox/admin_login.php');
		die();
	}