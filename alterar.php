<?php

include("mysqlconecta.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = mysqli_query($conexao, "SELECT * FROM cliente WHERE id ='$id'");

    $dados = mysqli_fetch_array($sql);

    if(!$dados){
        die("Cliente não encontrado");
    }

} else {
    die("ID não informado");
}

?>

<form method="POST">

Nome:
<input type="text" name="nome" value="<?php echo $dados['nome']; ?>">

Telefone:
<input type="text" name="telefone" value="<?php echo $dados['telefone']; ?>">

CPF:
<input type="text" name="cpf" value="<?php echo $dados['cpf']; ?>">

<input type="submit" value="Atualizar">

</form>