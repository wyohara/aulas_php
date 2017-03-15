<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$usado = $produto["usado"]?"checked='checked'" : "";
$categorias = listaCategorias($conexao);
?>
  <h1>Alteração de produto</h1>
  <form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto["id"]?>"/>
    <table class="table">
      <?php include ("produto-formulario-base.php");?>
      <tr>
        <td><input class="btn btn-primary" type="submit" name="Alterar" value="Alterar"></td>
      </tr>
    </table>
  </form>
<?php include("rodape.php");?>
