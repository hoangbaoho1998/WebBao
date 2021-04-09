<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "menu";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO menu (menu)
    VALUE ('BTEC')";
    

    if ($conn->query($sql) === TRUE) {
        echo "Table Menu created successfully";
    } else {
        echo "Error: " . $sql . "br" . $conn->error;
    }

    $conn->close();
    ?>