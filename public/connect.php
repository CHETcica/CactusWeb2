
    <?php
    $serverName = "localhost";
    $dbName = "cactus";
    $userName = "root";
    $userPassword = "";

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName;", $userName, $userPassword);
        echo "<pre>" . "" . "</pre>";
    } catch (PDOException $e) {
        echo "Sorry! You cannot connect to database";
    }


    ?>