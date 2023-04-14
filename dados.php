<?php
    $servername = "127.0.0.1 3307";
    $username = "root";
    $password = "1234";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>