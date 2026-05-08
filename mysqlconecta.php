<?php
$servidor="localhost";
$usuario = "root";
$senha = "";
$localhost = "senai";

$conexao= mysqliconnect($servidor,$usuario,$senha,$localhost,$bancodedados) 
or die ("Problema para conectar no banco,verifique os dados");
?>