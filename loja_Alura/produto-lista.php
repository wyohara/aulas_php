<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
//verifica se foi retornado uma mensagem de removido

if( array_key_exists("removido", $_GET) && $_GET["removido"]==="true"){
    ?>
    <p class=" alert-success"> Produto removido</p>
    <?php
}
?>
<h1> Listagem de produtos</h1>
<table class="table table-striped table-bordered">
<?php
  $produtos = listaProdutos($conexao);
  foreach ($produtos as $produto) :
    ?>
    <tr>
      <td> <?=$produto["nome"]?></td>
      <td> <?=$produto["preco"]?></td>
      <td> <?=substr($produto["descricao"], 0, 40) //limitando a exibição dos primeiros 15 caracteres?></td>
      <td> <?=$produto["categoria_nome"]?></td>
      <td> <a class="btn btn-primary"href="alterar-produto.php?id=<?=$produto["id"]?>"> Alterar</a> </td>
      <td>
        <form action= "remove-produto.php" method="post">
          <input type="hidden" name="id" value="<?=$produto["id"]?>">
          <button class="btn btn-danger">Remover</a>
        </form>
      </td>
    </tr>
    <?php
  endforeach;
?>
</table>
<?php include("rodape.php");?>
