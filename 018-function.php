<!DOCTYPE html>
<html>

<body>

    <?php
    function myMessage()
    {
        echo "Hello world!";
    }

    myMessage();

    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");


    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50

    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;

    function sumMyNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;

    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, "7");

    function addNumbers1(float $a, float $b): float
    {
        return $a + $b;
    }
    echo addNumbers1(1.2,2.4);
    ?>

</body>

</html>