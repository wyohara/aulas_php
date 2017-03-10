<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>
  <h1>Formulario de produto</h1>
  <form action="adiciona-produto.php" method="post">
    <table class="table">
      <tr>
        <td>Nome: </td>
        <td><input class="form-control" type="text" name="nome"/></td>
      </tr>
      <tr>
        <td>Preco: </td>
        <td><input class="form-control" type="number" name="preco"/></td>
      </tr>
      <tr>
        <td>Descrição:</td>
        <td><textarea class="form-control" name="descricao"></textarea>
      </tr>
      <tr>
        <td>Categoria:</td>
        <td><?php foreach ($categorias as $categoria): ?>
        <input type="radio" name="categoria_id" value="<?=$categoria["id"]?>"> <?=$categoria["nome"]?></br>
      <?php endforeach?></td>
      </tr>
      <tr>
        <td><input class="btn btn-primary" type="submit" name="Cadastrar" value="Cadastrar"></td>
      </tr>
    </table>
  </form>
<?php include("rodape.php");?>
