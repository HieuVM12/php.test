<!DOCTYPE html>
<html>

<body>
    <pre>

<?php
$cars = array("Volvo", "BMW", "Toyota");

var_dump($cars);

function myFunction()
{
    echo "This text comes from a function";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());

// calling the function from the array item:
$myArr[3];

array_push($cars, "Ford");
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);
$car["year"] = 2024;
var_dump($car);

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;


$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction());

$myArr["message"];

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
    $x = "Ford";
}
unset($x);
var_dump($cars);

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

//Output the array:
var_dump($fruits);
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
//add array

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));

?>

</pre>
</body>

</html>