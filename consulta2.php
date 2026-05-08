<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Busca</title>
</head>
<body>

<?php
include "mysqlconecta.php";

$busca = $_POST["busca"];


$query = mysqli_query(
    $conexao,
    "SELECT cli_cod, nome, telefone, cpf
     FROM cliente
     WHERE nome LIKE '%$busca%'"
);

while ($saida = mysqli_fetch_array($query)) {

    $codigo = $saida[0];
    $nome = $saida[1];
    $telefone = $saida[2];
    $cpf = $saida[3];

    echo "<p>
            <a href='individual.php?id=$codigo'>$codigo</a>
            - $nome - $telefone - $cpf
          </p>";
}

mysqli_close($conexao);
?>

<p><a href="menu.php">voltar</a></p>

</body>
</html>