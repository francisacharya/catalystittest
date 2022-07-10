<?php
// $servername = "localhost";
// $database = "catalystit";
// $username = "root";
// $password = "Francis@123";

// // Create connection

// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
//     if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     }

// echo 'Connected-successfully';

// mysqli_close($conn);
function db_connect(){
    //die('ok');
    $servername = "localhost";
    $database = "catalystit";
    $username = "root";
    $password = "Francis@123";
    $charset = "utf8mb4";

    try {

        $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo 'Connection Okay';

        return $pdo;
    }

    catch (PDOException $e)
    {
        echo 'Connection failed: '. $e->getMessage();
    }

}

?>