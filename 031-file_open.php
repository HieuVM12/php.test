<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Open</title>
</head>

<body>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("webdictionary.txt")) . "<br>";
    fclose($myfile);


    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgetc($myfile);

    fclose($myfile);
    ?>
</body>

</html>