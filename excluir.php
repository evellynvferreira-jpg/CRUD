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
    $id = $_GET['id'];
    $query = mysqli_query($conexao,"delete from cliente
    where
    cli_cod = '$id'");
    echo "<h1>Deletado com sucesso</h1>";
    mysqli_close($conexao)
    ?>
    <p><a href="menu.php">voltar</a></p>
</body>
</html>