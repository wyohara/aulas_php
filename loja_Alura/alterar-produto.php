<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");
$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$usado = $produto["usado"]?"checked='checked'" : "";
$categorias = listaCategorias($conexao);
?>
  <h1>Alteração de produto</h1>
  <form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto["id"]?>"/>
    <table class="table">
      <?php require_once ("produto-formulario-base.php");?>
      <tr>
        <td><input class="btn btn-primary" type="submit" name="Alterar" value="Alterar"></td>
      </tr>
    </table>
  </form>
<?php require_once("rodape.php");?>
