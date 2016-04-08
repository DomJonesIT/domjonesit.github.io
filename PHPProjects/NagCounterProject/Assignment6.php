<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "hhtp://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>Nag Counter</title>
</head>
<body>


<h3>Amount of times until you must register again: </h3>
<?php

	if (isset($_POST['submit'])) {
		setcookie("register", 1); 				// Creates  the register cookie
			$_COOKIE['register'] = 1;
		setcookie("name", $_POST['name']);		// Creates the name cookie
			$_COOKIE['name'] = $_POST['name'];
		setcookie("email", $_POST['email']);		// Creates the email cookie
			$_COOKIE['email'] = $_POST['email'];
		setcookie("count", "", time()-3600);		// Creates the nag counter cookie
			$_COOKIE['count'] = time()-3600;
	}
	
	if (isset($_COOKIE['register'])) {
		$user = $_COOKIE['name'];
		$email = $_COOKIE['email'];
	} 
	else {
		if(isset($_COOKIE['count'])) {
			$_COOKIE['count']--;
			setcookie("count", $_COOKIE['count']);
		}
		else {
			setcookie("count", 5);
		}
	}
?>

<?php
		if (isset($_COOKIE['register'])) {
			echo"<Welcome back $user</p>";		// Message for returning user
		}
		else {
			echo $_COOKIE['count']; 				// Displays the times user has until registration
			if ($_COOKIE['count'] ==  "0") {
				setcookie("count", 5);			
				
				// Registration Form
				echo "<p>Register!</p>";
				echo "<form action='Assignment6-2.php' method='POST'>";
				echo "Name: <input type='text' name='name' />";
				echo "Email: <input type='text' name='email' />";
				echo "<input type='submit' name='submit' value='Register' />";
				echo "</form>";
			}
			else{ 
				echo "";
			}
		}
					
?>
    
</body>
</html>
