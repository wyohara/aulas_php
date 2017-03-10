<?php include("cabecalho.php");?>
  <h1>Formulario de produto</h1>
  <form action="adiciona-produto.php">
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
        <td><input class="btn btn-primary" type="submit" name="Cadastrar" value="Cadastrar"></td>
      </tr>
    </table>
  </form>
<?php include("rodape.php");?>
