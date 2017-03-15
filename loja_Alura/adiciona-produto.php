<?php
  include("cabecalho.php");
  include("conecta.php");
  include("banco-produto.php");
  include("logica-usuario.php");

  verificaUsuario(); //verificando se o cookie do usuario está ativo

  //recuperando valores do produto-form
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $descricao =  $_POST["descricao"];
  $categoria_id = $_POST["categoria_id"];

  if(array_key_exists("usado",$_POST)){ //verifica se existe o valor usado no post
    $usado = "true";
  }else {
    $usado= "false"; // usa-se string pois o php interpreta false como string vazia
  }
  if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){
  	//aviso de sucesso na query
    ?>
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
