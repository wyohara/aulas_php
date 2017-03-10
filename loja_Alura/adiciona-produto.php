<?php
  include("cabecalho.php");
  include("conecta.php");
  include("banco-produto.php");

  //recuperando valores do produto-form
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];

  if (insereProduto($conexao, $nome, $preco)){
  	//aviso de sucesso na query?>
  	<p class="text-success">Produto <?=$nome?> adicionado.Seu valor é <?=$preco?>.</p>
  	<?php
  }else{
  	$erro = mysqli_error($conexao)
  	//aviso de erro na query?>
  	<p class="text-danger">O Produto  não foi adicionado. Erro <?=$erro?></p>
  	<?php
  }

  include("rodape.php");
?>
