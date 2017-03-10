<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_GET["id"];

removeProduto($conexao, $id);

header("Location:produto-lista.php?removido=true"); //redireciona para a lista de produtos
die(); // mata esta pagina php
?>
