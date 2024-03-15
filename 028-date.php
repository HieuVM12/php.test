<!DOCTYPE html>
<html>

<body>

    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("d-m-Y") . "<br>";
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa") . "<br>";
    echo "The time is " . date("d-m-Y h:i:sa") . "<br>";
    echo "Today is " . date("l") . "<br>";
    $d = mktime(12, 12, 12, 3, 15, 2024);
    //mktime(hour, minute, second, month, day, year)
    echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
    $d = strtotime("10:30pm March 15 2024");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    ?>

</body>

</html>