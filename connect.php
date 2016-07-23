<?php 
session_start();

if(isset($ADMINPAGE) && $ADMINPAGE && !isset($_SESSION['user_id']))
{
	header("Location: /admin_login.php");
	die();
}


try {
	$USER = "i491u16_arhickox";
	$HOST = "db.soic.indiana.edu";
	$DBNAME = "i491u16_arhickox";
	$PASSWORD = "my+sql=i491u16_arhickox";
	$CONN = new PDO("mysql:host=$HOST;dbname=$DBNAME",$USER,$PASSWORD);
	$CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}