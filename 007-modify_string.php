<?php
$x = "Hello World!";
echo strtoupper($x);
echo "<br>";
$x = "Hello World!";
echo strtolower($x);
echo "<br>";
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
echo "<br>";
$x = "Hello World!";
echo strrev($x);
echo "<br>";
$x = " Hello World! ";
echo trim($x);
echo "<br>";
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/
?>