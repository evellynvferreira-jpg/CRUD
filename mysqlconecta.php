<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "senai";

$conexao = mysqli_connect( $servidor,$usuario,$senha,$bancodedados) or die("Problema para conectar no banco, verifique os dados");

echo "Conectado com sucesso!";
?>