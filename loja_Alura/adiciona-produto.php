<?php include("cabecalho.php");
 include("conecta.php");

		//criando a função para inserir o produto
		function insereProduto($conexao, $nome, $preco){
			//Criando a query para inserir no banco
			$query = "INSERT INTO produtos(nome, preco) VALUES ('{$nome}', '{$preco}')";
			return mysqli_query($conexao, $query); //realizando a query e devolvendo o resultado
		}

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
	?>

<?php include("rodape.php");?>
