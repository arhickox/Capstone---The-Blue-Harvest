<?php

include "connect.php";

$sql = 'SELECT * FROM `menu_sections` JOIN menu_items ON menu_items.menu_section = menu_sections.menu_section WHERE menu_items.visible = 1 ORDER BY menu_sections.menu_section';

$stmt = $CONN->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->execute();

function toDollars($n){
  return '$'.number_format($n,2);
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
<style>
#section{
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:2100px;
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
<h1><center>Menu</center></h1>
<hr color=dfb200 size="3">
<?php 
  if(!$result){
    echo "There was a problem fetching the menu";
  }
  else {

    $rows = $stmt->fetchAll();
    $currentSection = "";
    foreach ($rows as $row) {
      if($row['section_name'] != $currentSection){
        if($currentSection != ""){
          echo '</tbody></table>';
        }
        $currentSection = $row['section_name'];
        echo "<h2 style=\"color:".$row['color']."\">$currentSection</h2>";
        echo '<table>';
        echo '<thead><tr><th>Name</th><th>Description</th><th>Price</th></tr></thead><tbody>';
      }
      echo '<tr>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td>'.$row['description'].'</td>';
      echo '<td>'.toDollars($row['price']).'</td>';
      echo '</tr>';
    }
    echo '</tbody></table>';
  }

?>
<h3><center><font color = "#dddddd">Come in to see our full bar menu including beer, wine and signature cocktails</font></center></h3>
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