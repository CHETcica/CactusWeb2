<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    $serverName = "localhost";
    $dbName = "cactus";
    $userName = "root";
    $userPassword = "";

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName;", $userName, $userPassword);
        echo "<pre>" . "You are now connecting to database!!" . "</pre>";
    } catch (PDOException $e) {
        echo "Sorry! You cannot connect to database";
    }


    ?>

</body> 

</html>