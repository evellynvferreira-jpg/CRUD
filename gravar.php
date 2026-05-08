<html>
    <head>
        <title>inserção no banco</title>
    </head>
    <body>
        <?php
        include "mysqlconecta.php";
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["Cpf"];

        echo $nome;
        echo "<br>";
        echo $telefone;
        echo "<br>";
        echo $cpf;

        $query = msqli_query($query,"insert into cliente (nome,telefone,cpf)value($nome,$telefone,$cpf)");
        echo "<br> gravado!";

        mysqli_close($conexao);
        ?>
        <p><a href="menu.php">voltar</a></p>
    </body>
</html>