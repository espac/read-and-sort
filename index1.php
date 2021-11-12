<?php 
$content = file_get_contents("index2.php");

echo $content;	
//\r\n;								 //use in console
// echo "<br><br><br><br><br>";  	 // use if on browser
echo nl2br("\n\n\n\n");

preg_match_all('/\[[^\]]*[^\]]\]/', $content, $matches);
// var_dump($matches[0]);  			//all matches from regex pattern
print_r($matches[0]);				//without curly braces





//works too
/*
preg_match_all('/\[.*?\]/', $content, $matches);
var_dump($matches);
var_dump($matches[0]);
print_r($matches);
print_r($matches[0]);
*/

 ?>


