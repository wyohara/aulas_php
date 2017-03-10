<?php include("cabecalho.php");?>
	<h1>Bem Vindo</h1>
	<?php
		//recuperando valores do produto-form
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];

		//criando a conexao com o banco de dados
		$conexao = mysqli_connect("localhost","root", "", "Loja");

		//Criando a query para inserir no banco
		$query = "INSERT INTO produtos(nome, preco) VALUES ('{$nome}', '{$preco}')";

		$resultado = mysqli_query($conexao, $query); //realizando a query

		if ($resultado){
			//aviso de sucesso na query?>
			<p class="alert-success">Produto <?php echo $nome;?> adicionado.Seu valor é <?php echo $preco?>.</p>
			<?php
		}else{
			//aviso de erro na query?>
			<p class="alert-danger">O Produto  não foi adicionado</p>
			<?php
		}
		mysqli_close($conexao);//encerrando a conexao
	?>

<?php include("rodape.php");?>
