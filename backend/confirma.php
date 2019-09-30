<?php

    include "conexao.php";  

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $desc = $_POST["colaboracao"];

    $code = rand(1000, 9999);

    $sql = "INSERT INTO people (nome, email, descricao, codigo) VALUES ('$nome', '$email', '$desc', '$code')";
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Confirmado!</title>
    <style>
        .main{
            width:100vw;
            height:100vh;
            background: purple;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1{
            font-size: 1.9rem;
        }

        p.text{
            padding: 10px;
            border: 1px solid #000;
            background: #4f044f;
            font-size: 1.4rem;
            border-radius: 10px;
        }

        p.second{
            margin-top: 30px;
            font-size: 1.2rem;
        }

        a{
            padding: 10px 45px;
            background: #000;
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>VOCÊ ESTÁ CONFIRMADO NA RESENHA!</h1>
        <p class="text">
            Seu código é : <?= $code ?>
        </p>
        <P class="second">
            NÃO PERCA-O caso contrário não entrará na resenha
        </p>

        <a href="../index.html">Voltar</a>
    </div>
</body>
</html>