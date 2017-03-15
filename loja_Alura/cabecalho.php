<?php
error_reporting(E_ALL ^ E_NOTICE); // exibe todos os erros menos os do tipos notice

//incluindo cabeçalhos
include ("mostra-alerta.php");
 ?>
<html>
<head>
    <title>Minha loja</title>
    <meta charset="UTF-8">
		<link href="CSS/bootstrap.css" rel="stylesheet"/>
		<link href="CSS/loja.css" rel="stylesheet"/>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="produto-form.php">Adiciona Produto</a></li>
                    <li><a href="produto-lista.php">Produtos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="principal">
      <?php
        //exibindo os alertas se existirem
        mostraAlerta("success");
        mostraAlerta("danger");?>
