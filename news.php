<?php 
    include "connect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" href="css/style.css">
<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:1700px;
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
<h1><center><div id="padding1">News</center></h1>
<hr color=dfb200 size="3">
<div id="News_Image">
<img src="images/closed.jpg" height="250" width="250">
</div>
<p> <h3><center>CLOSED</center></h3><br><img src="images/calendar.jpg"><b>  April 15, 2015</b><br></p>
<p>We will unfortunately be closed on Wednesday, April 15th for periodic maintenence. We're sorry for the inconvenience. It's possible we'll also be closed on Thursday the 16th but we will definitely be open by Friday. Thanks for understanding.</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="News_Image">
<img src="images/summer_ribs.jpg" height="250" width="250">
</div>
<p> <h3><center>Introducing our Summer Menu</center></h3><br><img src="images/calendar.jpg"><b>  June 11, 2015</b><br></p>
<p>The Blue Harvest is excited to announce a limited edition summer menu featuring grill favorites and special beer and cocktail selections. Come in soon to check it out!</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="News_Image">
<img src="images/dogs.jpg" height="250" width="250">
</div>
<p> <h3><center>Dog Days of Summer</center></h3><br><img src="images/calendar.jpg"><b>  June 14, 2015</b><br></p>
<p>To kick off the summer, The Blue Harvest has decided to revise our dogs policy. Small to Medium sized dogs will now be allowed to accompany owners eating in the outside eating section. We look forward to seeing everyone's dogs there!</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="News_Image">
<img src="images/dragoncon.png" height="250" width="250">
</div>
<p> <h3><center>We're going to Dragoncon!</center></h3><br><img src="images/calendar.jpg"><b>  September 1st, 2015</b><br></p>
<p>We have been lucky enough to procure a booth at Dragoncon this year, so anyone who wants to sample our delicous food can do so at the Marriott Marquis Imperial Ballroom, booth #332</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="News_Image">
<img src="images/glasses.jpg" height="250" width="250">
</div>
<p> <h3><center>Episode 7 Commemoritive Glasses</center></h3><br><img src="images/calendar.jpg"><b>  November 18, 2015</b><br></p>
<p>With Star Wars Episode 7: The Force Awakens exactly a month out, The Blue Harvest will be serving our new Starkiller Screwdrivers in TFA Commemoritive Glasses. There are 4 available, so collect them all!</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
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
</body>
</html>