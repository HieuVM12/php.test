<?php
$cookie_name = "hieu";
$cookie_value = "Minh Hieu";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie("thu","nat",time()-3600);
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name] ."<br>";
        echo "create cookie <br>";
    }
    if(!isset($_COOKIE["thu"])) {
        echo "cookie 'thu' khong ton tai";
    }
    ?>

</body>

</html>