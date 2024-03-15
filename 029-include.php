<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>

<body>
    <h1>Welcome</h1>
    <?php include 'footer.php' ?>
    <?php include 'vars.php';
    echo "I have a $color $car.";
    ?>
    <h1>Welcome</h1>
    <?php require 'noFileExists.php';
    echo "I have a $color $car.";
    //the echo statement will not be executed
    ?>
</body>

</html>