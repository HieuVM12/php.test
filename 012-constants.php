<!DOCTYPE html>
<html>

<body>

    <?php
    // case-sensitive constant name
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    define("GREETINGs", "Welcome to W3Schools.com!", true);
    echo GREETINGs;

    const MYCAR = "Volvo";

    echo MYCAR;

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];

    function myTest()
    {
        echo GREETING;
    }

    myTest();
    ?>

</body>

</html>