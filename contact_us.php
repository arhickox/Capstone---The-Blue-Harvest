<?php 
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/style.css">

<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:1100px;
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
<div align="center" width="500px">
<?php if(isset($_SESSION['banner_msg'])){
	echo '<div class="banner '.$_SESSION['banner_msg']['type'].'">'.$_SESSION['banner_msg']['msg'].'</div>';
	unset($_SESSION['banner_msg']);
}
?>
<h1><center>Contact Us</center></h1>
<hr color=dfb200 size="3">
<h2><center>Send us a message</center></h2>
<?php 
if(isset($_SESSION['errors'])){
	echo '<ul>';
	foreach ($_SESSION['errors'] as $key => $value) {
		# code...
		echo "<li>$value</li>";
	}
	echo '</ul>';
	unset($_SESSION['errors']);
} ?>
<form action="save_comment.php" method="POST" >
Name:<br>
<input type="text" name="name" placeholder="Your name" required <?php
if(isset($_SESSION['oldData']) && isset($_SESSION['oldData']['name']))
{
	echo 'value="'. $_SESSION['oldData']['name'].'" '; 
}
 ?> ><br>
E-mail:<br>
<input type="email" name="mail" placeholder="Your email" required <?php
if(isset($_SESSION['oldData']) && isset($_SESSION['oldData']['mail']))
{
	echo 'value="'. $_SESSION['oldData']['mail'].'" '; 
}
 ?>><br>
Comment:<br>
<textarea type="text" name="comment" required placeholder="Your comment"><?php
if(isset($_SESSION['oldData']) && isset($_SESSION['oldData']['comment']))
{
	echo $_SESSION['oldData']['comment']; 
}
 ?></textarea>
 <br>
<input type="submit" value="Send">
&nbsp;&nbsp;&nbsp
<input type="reset" value="Reset">
</form>
<h2><center>Or come visit us in Bloomington</center></h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.2210350705436!2d-86.53597935181668!3d39.16969554264499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886c66dc13a4f115%3A0xd92133f182a5bb22!2s403+N+Walnut+St%2C+Bloomington%2C+IN+47404!5e0!3m2!1sen!2sus!4v1468609200551" width="600" height="450" frameborder="0" style="border:2" allowfullscreen></iframe>
</div>

</div>
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
</div>
</body>
</html>

