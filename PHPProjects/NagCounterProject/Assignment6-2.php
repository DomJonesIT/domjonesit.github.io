<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "hhtp://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>Nag Counter</title>
</head>

<body>
<?php

	$rUser = $_POST['name'];		// Gets user name
	$rEmail = $_POST['email'];	// Gets user email
	
	echo "<p>Thank you for registering " . $rUser . "<br />";
	echo "<p>Registration information sent to, " . $rEmail . "<br />";
	

?>
<p><a href="Assignment6.php"/>Return to Registration Page</a></p>
</body>
</html>
