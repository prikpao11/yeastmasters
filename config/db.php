<?php
    $servername = "localhost";
    $username = "meld";
    $password = "123456";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=yeast", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
