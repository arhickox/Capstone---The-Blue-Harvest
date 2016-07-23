<?php 
    include "connect.php";

?><!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
<style>
#section{
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:1300px;
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
<h1><center><div id="padding1"><?php if(isset($_SESSION['lastpage'])) echo $_SESSION['lastpage'];?>About Us</center></h1>
<hr color=dfb200 size="3">
<div id="Austin_Image">
<img src="images/austin_hickox.jpg" height="300" width="300">
</div>
<p> <h2><center>Austin Hickox</center></h2>
<h3><center><i>General Manager</i></center></h3>
</p>
<br>
<center>Our General Manager Austin Hickox is a long time Star Wars fan who is excited to combine his two favorite passions – food and Star Wars! He was inspired to name the eatery Blue Harvest after the name creator George Lucas used during filming of the first movie. Austin is a graduate of Indiana University and started this business after 10 years of consulting with KPMG LLP.</center></p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="Aaron_Image">
<img src="images/aaron_riker.jpg" height="300" width="300">
</div>
<br>
<p> <h2><center>Aaron Riker</center></h2>
<h3><center><i>Service Manager</i></center></h3>
</p>
<br>
<p style="text-align:center">Aaron serves as Assistant Manager for the Blue Harvest.  Aaron brings 15 years of restaurant experience and an endless array of old Yugi Oh cards.  Aaron is a graduate of Kennesaw State University in Accounting.</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="Austin_Image">
<img src="images/devyn_hickox.jpg" height="300" width="300">
</div>
<p> <h2><center>Devyn Hickox</center></h2>
<h3><center><i>Event Manager</i></center></h3>
</p>
<br>
<center>Devyn is the younger sister to our General Manager and full time Special Events and Catering Manager for Blue Harvest.  Devyn is a graduate of the University of Georgia with a double major in Marketing and Accounting. </center></p>
<br><br><br><br><br><br><br>
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
