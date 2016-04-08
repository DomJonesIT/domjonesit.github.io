<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Bowling Form</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=iso-8859-1" />
</head>	

  <body>

	<h1>Bowling League</h1>

	<?php


if (isset($_POST['name']) && isset($_POST['age']) && 
	isset($_POST['average']))  {

	$Name = ($_POST['name']);
	$Age = ($_POST['age']);
	$Average = ($_POST['average']);
	$League = "$Name, $Age, $Average\n";
	$File = "League.txt";
	if (file_put_contents($File, $League, FILE_APPEND) > 0)
		echo "<p> Your name has been registered for the 				league.<br /> You can enter another person or quit the 		application.</p>\n";

	else 
		echo "<p>Error</p>";
	}
	else
 	echo "<p>To sign up for the league, submit
	your data and use the <br /> \"Enter Button\" 
	to enter your information.<br /></p>";

	?>	

   <form action="Bowl.php" method="POST">
   <p>Name: <input type="text" name="name" /></p>
   <p>Age: <input type="text" name="age"  /></p>
   <p>Average: <input type="text" name="average"  /></p>
   <p><input type="submit" value="Enter" /></P>
   </form>
	
  </body>

</html> 
