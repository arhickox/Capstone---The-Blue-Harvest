<?php 

$ADMINPAGE = true;
include "connect.php";

echo '<pre>';
echo '</pre>';
if(!empty($_POST)){
	if($_POST["type"] == 'delete'){
		$sql = 'DELETE FROM menu_items WHERE menu_id = :id';
		$stmt = $CONN->prepare($sql);
		$stmt->bindParam(':id',$_POST['id']);
	}
	else if($_POST['type'] == 'save'){
		$sql = 'UPDATE menu_items SET menu_section = :cat, name = :name, description = :desc, price = :price, visible = :visible WHERE menu_id = :id';
		$stmt = $CONN->prepare($sql);
		$stmt->bindParam(':id',$_POST['id']);
		$stmt->bindParam(':name',$_POST['name']);
		$stmt->bindParam(':cat',$_POST['menu_section']);
		$stmt->bindParam(':desc',$_POST['description']);
		$stmt->bindParam(':price',$_POST['price']);
		$visible = isset($_POST['visible']);
		$stmt->bindParam(':visible',$visible);
	} 
	else if ($_POST['type'] == 'create'){
		$sql = 'INSERT INTO menu_items (name, menu_section, description, price, visible)
				VALUES (:name, :cat, :desc, :price, :visible)';
		$stmt = $CONN->prepare($sql);
		$stmt->bindParam(':name',$_POST['name']);
		$stmt->bindParam(':cat',$_POST['menu_section']);
		$stmt->bindParam(':desc',$_POST['description']);
		$stmt->bindParam(':price',$_POST['price']);
		$visible = isset($_POST['visible']);
		$stmt->bindParam(':visible',$visible);
	}

	if(isset($stmt)){
		$stmt->execute();
	}
}



$menuSectionsSql = 'SELECT * FROM menu_sections';
$mSStmt = $CONN->prepare($menuSectionsSql); 
$mSStmt->setFetchMode(PDO::FETCH_ASSOC);


$sql = 'SELECT * FROM menu_items WHERE 1 ORDER BY menu_items.menu_section';

$stmt = $CONN->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->execute();

$mSResult = $mSStmt->execute();



if(!$result || !$mSResult){
	die("error getting data from server");
}


$categoryRows = $mSStmt->fetchAll();
$itemRows = $stmt->fetchAll();

function displayCategorySelect($id,$rows){
	$str = "";
	$str .= "<select name='menu_section'>";
	foreach ($rows as $cat) {
		if($cat['menu_section'] == $id){
			$selected = 'selected ';
		}
		else {
			$selected = '';
		}
		$str .= '<option '.$selected.'value="'.$cat['menu_section'].'">'.$cat['section_name'].'</option>';
	}

	$str .= "</select>";
	return $str;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrator Menu Editor</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
#section {
    background-image: url("http://cgi.soic.indiana.edu/~arhickox//images/grey_back.png");
    width:960px;
    height:3400px;
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

<?php

echo "<table><thead><tr><td>Category</td><td>Name</td><td>Description</td><td>Price</td><td>Visible</td><td>Action</td></tr></thead><tbody>";
foreach ($itemRows as $item) {
	echo '<tr>';
	?>
	<form method="POST" action="">
		<td><?= displayCategorySelect($item['menu_section'],$categoryRows) ?></td>
		<td><input name="name" type="text" value="<?= $item['name'] ?>" required/></td>
		<td><textarea rows="4" cols="50" name="description" required><?= $item['description'] ?></textarea></td>
		<td><input name="price" required type="number" value="<?= number_format($item['price'],2) ?>"/></td>
		<td><input name="visible" value="1" type="checkbox" <?php if( $item['visible']) echo 'checked="checked"' ?> /></td>
		<td><input name="id" type="hidden" value="<?= $item['menu_id'] ?>">
			<button name="type" value="save">Save</button>
			<button name="type" value="delete">Delete</button>
		</td>
	</form>
	<?php
	echo '</tr>';
}

echo '</tbody></table>';


?>

<h2>Add new Item</h2>
<form action="" method="POST">
	<table>
	<thead>
		<tr>
			<th>Category</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Visible</th>
		</tr>
	</thead>
		<tbody>
			<tr>
				<td><?= displayCategorySelect(0,$categoryRows) ?></td>
				<td><input name="name" type="text"required/></td>
				<td><textarea name="description" required></textarea></td>
				<td><input name="price" required type="number"/></td>
				<td><input name="visible" value="1" type="checkbox" checked="checked" /></td>
			</tr>
		</tbody>
	</table>
	<br>
	<center><button name="type" value="create">Create</button></center>
</form>
</div>
<div id="footer">
<a href="#top" style="color:#dfb200">Back to Top
</a>
</div>
</body>
</html>