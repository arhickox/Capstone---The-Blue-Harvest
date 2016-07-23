<?php 
include "connect.php";
?><!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/style.css">
<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:1700px;
    float:left;
}
form {
	width:250px;
	margin:0 auto;
	text-align:center;
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
$page_title = 'Login';
if ( isset($_SESSION['errors']) && !empty($_SESSION['errors']))
{
	echo 'Oop! There was a problem!';
	echo '<ul id="err_msg">';
	foreach($_SESSION['errors'] as $msg)
	{
		echo "<li>$msg</li>";
	}
	echo '</ul>';
	echo 'Please try again';
	unset($_SESSION['errors']);
}
?>
<h1>Login</h1>
<center>
<form action = "login_action.php" method = "POST">
<label>
<span>Email : </span><input type="email" name="user" placeholder="e.g name@example.com" required>
</label>
<label>
<span>Password : </span><input type="password" name="password" required>
</label>
<input type = "submit" value = "Login">
</center>
</form>
<div id="footer">
<a href="#top"><font color=dfb200>Back to Top</font></a>
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
