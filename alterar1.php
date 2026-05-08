<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
</head>
<body>

<?php
include "mysqlconecta.php";

$codigo = $_GET["codigo"];
$nome = $_GET["nome"];
$telefone = $_GET["telefone"];
$cpf = $_GET["cpf"];

$query = mysqli_query(
    $conexao,
    "UPDATE cliente SET
        nome = '$nome',
        telefone = '$telefone',
        cpf = '$cpf'
     WHERE cli_cod = '$codigo'"
);

    echo "Atualizado com sucesso!";

?>

</body>
</html>