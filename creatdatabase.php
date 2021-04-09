<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "menu";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE Menu (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        menu VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table Menu created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
    ?>