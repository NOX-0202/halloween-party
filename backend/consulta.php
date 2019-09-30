<?php
    include_once "conexao.php";

    $sql = "SELECT * FROM people";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Todos</title>
    <style>
    
    .main{
            width:100vw;
            height:100vh;
            background: purple;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        th, td{
            padding: 10px;
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

        <h2 class="h2 mb-5  ">
            Todas as pessoas confirmadas!
        </h2>
        
        <table border="1" bordercolor="white" class="text-center">
                <tr>
                    <th>Nome</th>
                    <th>Código</th>
                    <th>Oque vai levar</th>
                </tr>
            <?php
                while ($registro = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>".$registro['nome']."</td>
                        <td>".$registro['codigo']."</td>
                        <td>".$registro['descricao']."</td>
                </tr>";
                
                }
            
            ?>
        </table>
        <a href="../index.html">voltar</a>
    </div>
    
</body>
</html>