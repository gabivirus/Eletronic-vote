<?php
    $servername = "127.0.0.1 3307";
    $username = "root";
    $password = "1234";
    $base = "votacao";//dbname
    $conn = mysqli_connect($servername, $username, $password, $base);

    //TESTE
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    else{
        echo "Connected successfully";
    }

    $sqlq = "SELECT * FROM table_name";

    $result = mysqli_query($conn, $sqlq);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["nome"];
    }
    //

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cpf = $_POST['cpf'];
        $url = "https://www.receitaws.com.br/v1/cnpj/{$cpf}";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);
        if (isset($data['erro'])){
            echo '<'
        }
    }

    mysqli_close($conn);
?>