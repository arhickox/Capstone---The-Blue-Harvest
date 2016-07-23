<?php

$ADMINPAGE = true;
include "connect.php";

?><!DOCTYPE html>
<html>
<head>
	<title>Administrator Comment Viewer</title>
	<link rel="stylesheet" href="css/style.css">
<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:900px;
	float:left;
}
 
</style>
</head>
<body>
<div class="content">
<div id="header">
<img src="images/blue_harvest_logo.png">
<h2><font color=dfb200>a Star Wars themed eatery</font></h2>
</div>
<div id="buttons">
 <button onclick = "parent.location='index.php'">Home</button>&nbsp;&nbsp;&nbsp;&nbsp;
 <button onclick = "parent.location='about_us.php'">About Us</button>&nbsp;&nbsp;
 <button onclick = "parent.location='news.php'">News</button>&nbsp;&nbsp;
 <button onclick = "parent.location='events.php'">Events</button>&nbsp;&nbsp;
 <button onclick = "parent.location='menu.php'">Menu</button>&nbsp;&nbsp;
 <button onclick = "parent.location='contact_us.php'">Contact Us</button>&nbsp;&nbsp;
</div>
<div id="section">
<?php

if (!isset($_SESSION['user_id'])) {
	header('Location: /admin_login.php');
	die();
}

$sql = 'SELECT * FROM comments';
$stmt = $CONN->prepare($sql);

$success = $stmt->execute();

	if(!$success){
echo "error";
		die("An error occured when trying to get the comments.");
	}


$stmt->setFetchMode(PDO::FETCH_ASSOC);

$rows = $stmt->fetchAll();

echo "<h2>Messages</h2><hr size='7' color='black'>";

foreach ($rows as $index => $row) {

	echo '</pre>';
	echo '<center>';
	echo "<strong> From: </strong>".ucwords(strtolower($row['name'])."<br>");
	echo "<strong> Email Address: </strong>".($row['email'])."<br>";
	echo "<strong> Message: </strong>".($row['comment'])."<br><br><br><hr>";
	echo '</center>';
}
?>
</div>
<div id="footer">
<a href="#top" style="color:#dfb200">Back to Top
</a>
<?php 
if(!isset($_SESSION['user_id']))
{
	echo '&nbsp;&nbsp;&nbsp; <a href="admin_login.php">Administrator Login</a>';
}
if(isset($_SESSION['user_id']))
{
	echo '&nbsp;&nbsp;&nbsp <a href="logout.php">Administrator Logout</a>';
}
if(isset($_SESSION['user_id']))
{
	echo '&nbsp;&nbsp;&nbsp <a href="admin_features.php">Administrator Page</a>';
}
?>
</div>
</body>
</html>