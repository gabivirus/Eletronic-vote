<?php
    $servername = "127.0.0.1 3307";
    $username = "root";
    $password = "1234";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<h4 name='title' class='titulo'>title</h4>";
        echo "<h3 name='name' class='nome'>name</h3>";
        echo "<img name='img' src=' alt='>";
        echo "<h3 name='number' class='numero'>number</h3>";
        echo "<h5 name='party' class='partido'>party</h5>";
    }
?>