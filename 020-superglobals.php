<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 75;

    function myfunction()
    {
        global $x;
        echo $x;
    }

    myfunction();


    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['HTTP_REFERER'];
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
    <a href="http://php.test/020-superglobals.php?subject=PHP&web=W3schools.com">Test $GET</a>
    <?php
    echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];
    ?>

</body>

</html>