<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
        $int = 100;
        if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
            echo ("Integer is valid");
        } else {
            echo ("Integer is not valid");
        }
        $int = 0;
        if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
            echo ("Integer is valid");
        } else {
            echo ("Integer is not valid");
        }
        $int = 122;
        $min = 1;
        $max = 200;
        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
            echo ("Variable value is not within the legal range");
        } else {
            echo ("Variable value is within the legal range");
        }

        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

        if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
            echo ("$ip is a valid IPv6 address");
        } else {
            echo ("$ip is not a valid IPv6 address");
        }
        ?>


    </table>

</body>

</html>