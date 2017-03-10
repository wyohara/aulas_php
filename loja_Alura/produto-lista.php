<?php
include("cabecalho.php");
include("conecta.php");

$resultado = mysqli_query($conexao, "SELECT * FROM produtos"); //buscando todos os produtos

while($produto = mysqli_fetch_assoc($resultado)){// listando os resultados
  echo $produto["nome"]."</br>";
}
?>

<?php include("rodape.php");?>
