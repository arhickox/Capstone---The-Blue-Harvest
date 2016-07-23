<?php

include "connect.php";


$name = $_POST["name"];
$mail = $_POST["mail"];
$comment = $_POST["comment"];

$errors = [];


if(trim($name) == ""){
	$errors[] = "Name is required";
}
if(trim($comment) == ""){
	$errors[] = "Comment is required";
}





if(empty($errors)){
		$sql = 'INSERT INTO comments(name,email,comment,created_at) VALUES (:name,:mail,:comment,NOW())';
		$stmt = $CONN->prepare($sql);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':mail',$mail);
		$stmt->bindParam(':comment',$comment);

		$success = $stmt->execute();
		if($success){
			$_SESSION['banner_msg'] = [
				'type' => '',
				'msg' => 'Your comment was successfully posted.'
			];
			header(('Location: http://cgi.soic.indiana.edu/~arhickox/contact_us.php'));
			die();
		}
		else{
			$errors[] = 'Woops something went wrong';
		}
		
}


$_SESSION['banner_msg'] = [
				'type' => 'error',
				'msg' => 'An error occured when we tried to post your comment.'
			];
$_SESSION['errors'] = $errors;
$_SESSION['oldData'] = $_POST;
header('Location: http://cgi.soic.indiana.edu/~arhickox/contact_us.php');
die();
