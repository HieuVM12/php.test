<?php
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
echo "<br>";
$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";
$x = "Hello World!";
echo substr($x, 6);

$x = "Hello World!";
echo substr($x, -5, 3);

$x = "Hi, how are you?";
echo substr($x, 5, -3);
?>