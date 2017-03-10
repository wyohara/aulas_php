<?php include("cabecalho.php");?>
	<h1>Bem Vindo</h1>
	<?php
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
	?>
	<p class="alert-success">Produto <?php echo $nome;?> adicionado.
	Seu valor é <?php echo $preco?>.</p>
<?php include("rodape.php");?>
