<?php 
    include "connect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:1700px;
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
<h1><center><div id="padding1">Events</center></h1>
<hr color=dfb200 size="3">
<div id="Event_Image">
<img src="images/SW_trivia.png" height="250" width="250">
</div>
<p> <h3><center>Star Wars Trivia Tuesdays</center></h3><br><img src="images/calendar.jpg"><b>  April 30, 2016</b><br></p>
<p>Come join us every Tuesday in May for Star Wars Trivia Night.  Play as individuals or teams. One $50 Blue Harvest gift certificate will be awarded each week. Trivia nights begin at 10pm.</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="Event_Image">
<img src="images/4th_july.jpg" height="250" width="250">
</div>
<p> <h3><center>4th of July Celebration</center></h3><br><img src="images/calendar.jpg"><b>  July 1, 2016</b><br></p>
<p>To celebrate 4th of July this year, we will be having a food special of half off appitizers as well as continuing our "Red, White and Brew" tradition with a series of specialty beers. Come on out.</p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="Event_Image">
<img src="images/SWCE.jpg" height="250" width="250">
</div>
<p> <h3><center>Live Streaming Celebration Europe!</center></h3><br><img src="images/calendar.jpg"><b>  July 8, 2016</b><br></p>
<p>We will be Live Streaming the Celebration Europe events on Friday, July 15th through Sunday July 17th.  Come see the highly anticipated new Rogue One trailer, Star Wars Rebels reveals and more on our big screens!  Customers who come in costume will receive 10% off their order (excluding alcohol).  </p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="Event_Image">
<img src="images/pokemon_go.jpg" height="250" width="250">
</div>
<p> <h3><center>Pokemon Go Pokestop</center></h3><br><img src="images/calendar.jpg"><b>  July 12, 2016</b><br></p>
<p>Blue Harvest is a desgnated Pokestop!  Lures will be set every Thursday starting at 4pm until close.  Come meet fellow players! </p>
<br><br><br><br><br><br><br>
<hr width="90%" color=dfb200>
<div id="Event_Image">
<img src="images/rogue_one.jpg" height="250" width="250">
</div>
<p> <h3><center>Rogue One After Party</center></h3><br><img src="images/calendar.jpg"><b>  December 18, 2016</b><br></p>
<p>The next movie in the Star Wars Universe releases on December 16, 2016.  Come join us on Sunday, December 18th after you have seen the movie one (or four) times  to chat with fellow fans!</p>
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