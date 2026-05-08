<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "mysqlconecta.php";
    $busca = $_POST["busca"];
    $query = mysqli_query($conexao,"select cli_cod,nome,telefone,cpf from cliente where cli_nome like "%$busca%\"""");
    while($saida = mysqli_fetch_array($query))
        {
            $codigo = $saida[0];
            $nome = $saida [1];
            $telefone = $saida [2];
            $cpf = $saida[3];
            echo "<p><a href='individual.php?id=$codigo'>$codigo</a> - $nome - $telefone - $cpf</p>";
        }
        <p><a href="menu.php"></a>voltar</p>
    ?>
</body>
</html>