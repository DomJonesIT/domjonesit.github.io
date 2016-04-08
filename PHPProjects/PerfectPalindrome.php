<?php

// Perfect palindrome program

$String1 = "radar";		// Declares String1
$String2 = "jewel";		// Declares String2
$PalindromeString1 = strrev($String1);		// Reverses String1
$PalindromeString2 = strrev($String2);		// Reverses String2

echo "<h2>Radar</h2>\n";		// Displays String1

if ($PalindromeString1 == $String1){

	echo "The string is a  perfect palindrome.";		// Indicates if String1 is a perfect palindrome

}
else {

	echo "The string was not a perfect palindrome." . "<br />\n";		// Indicates if String1 is not a perfect palindrome
}

echo "<h2>Jewel</h2>\n";		// Displays String2

if ($PalindromeString2 == $String2){
	
	echo "The string is a perfect palindrome.";		// Indicates if String2 is a perfect palindrome

}
else{
	
	echo "The string is not a perfect paindrome.";		// Indicates if String2 is not a perfect palindrome.
}
?>
