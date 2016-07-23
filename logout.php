<?php

include "connect.php";

unset($_SESSION['user_name']);
unset($_SESSION['user_id']);
unset($_SESSION['user_email']);

header("Location: http://cgi.soic.indiana.edu/~arhickox/index.php");