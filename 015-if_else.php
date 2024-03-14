<!DOCTYPE html>
<html>

<body>

    <?php
    $t = 14;

    if ($t < 20) {
        echo "Have a good day!";
    }

    $a = 200;
    $b = 33;
    $c = 500;

    if ($a > $b && $c < $a) {
        echo "Both conditions are true";
    }

    $a = 13;

    $b = $a < 10 ? "Hello" : "Good Bye";

    echo $b;

    $a = 13;

    if ($a > 10) {
        echo "Above 10";
        if ($a > 20) {
            echo " and also above 20";
        } else {
            echo " but not above 20";
        }
    }
    ?>

</body>

</html>