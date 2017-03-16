<?php require_once("cabecalho.php");?>
	<form action="envia-contato.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input type="text" name= "nome" class="form-control"/></td>
			</td>
			<tr>
				<td>Email</td>
				<td><input type="email" name= "email" class="form-control"/></td>
			</td>
			<tr>
				<td>Mensagem</td>
				<td><input type="text" name= "mensagem" class="form-control"/></td>
			</td>
			<tr>
				<td><button class="btn btn-primary"> Enviar</button></td>
			</td>
		</table>
	</form>
<?php require_once("rodape.php");?>
