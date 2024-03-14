<!DOCTYPE html>
<html>

<body>

    <?php
    echo "loop while";
    $i = 1;

    while ($i < 6) {
        echo $i;
        $i++;
    }
    $i = 1;
    while ($i < 6) {
        if ($i == 3) break;
        echo $i;
        $i++;
    }
    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3) continue;
        echo $i;
    }
    echo "do while";
    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6);
    echo "for loop";
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    echo "foreach loop on arrays";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }

    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }

    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
        echo "$x: $y<br>";
    }

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") $x = "pink";
    }
    // By default, changing an array item will not affect the original array
    var_dump($colors);

    foreach ($colors as &$x) {
        if ($x == "blue") $x = "pink";
    }
    //By assigning the array items by reference, changes will affect the original array
    var_dump($colors);
    ?>

</body>

</html>