<?php
$page_title = 'Login';
if ( isset($errors) && !empty($errors))
{
	echo '<p id="err_msg">Oops! There was a problem:<br>';
	foreach($errors as $msg)
	{
		echo "-$msg<br>";
	}
	echo 'Please try again'
}
?>
<h1>Login</h1>
<form action = "login_action.php" method = "POST"
<p>
First Name: <input type = "text" name = "fname"
</p><p>
Last Name: <input type = "text" name = "lname"
</p><p>
Email Address: <input type = "text" name = "email"
</p><p>
Date of Birth: <input type = "date" name = "birthday"
</p><p>
<input type = "submit" value = "Submit"
</p>
</form>