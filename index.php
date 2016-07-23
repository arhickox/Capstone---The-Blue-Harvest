<?php 
include "connect.php";
?><!DOCTYPE html>
<html>
<head>
	<title>The Blue Harvest</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:1400px;
    float:left;
}
</style>
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
<center>
<h2>Come to Blue Harvest for Food, Fandom and Fun!</h2><br>
Our Mission is to become the food and entertainment destination for Star Wars fans and the surrounding community.</h2><br>
<h3>Follow us on Twitter!</h3>
<a class="twitter-timeline" data-width="500" data-height="700" href="https://twitter.com/BlueHarvestEats">Tweets by BlueHarvestEats</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</center>
<br/>
<br/>
<img src="images/hours_dogfight.png">
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

