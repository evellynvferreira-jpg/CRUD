```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta individual</title>
</head>
<body>

<h1>Consulta individual</h1>

<?php

include "mysqlconecta.php";

$id = $_GET["id"];

$query = mysqli_query($conexao,
    "SELECT cli_cod, nome, telefone, cpf
     FROM cliente
     WHERE cli_cod = '$id'"
);

while($saida = mysqli_fetch_array($query))
{
    $codigo = $saida[0];
    $nome = $saida[1];
    $telefone = $saida[2];
    $cpf = $saida[3];

    echo "<br> Código: ".$codigo;
    echo "<br> Nome: ".$nome;
    echo "<br> Telefone: ".$telefone;
    echo "<br> CPF: ".$cpf;
}

?>

<br><br>

<a href="alterar.php?id=<?php echo $id; ?>">
    <button>Alterar</button>
</a>

<a href="excluir.php?id=<?php echo $id; ?>">
    <button>Excluir</button>
</a>

</body>
</html>
```
