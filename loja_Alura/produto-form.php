<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario(); //verifica se o usuario está logado com cookie
$produto = array('nome' =>'' , 'valor'=>'', 'descricao' => '',  'categoria_id' => '1');
$usado='';

$categorias = listaCategorias($conexao);
?>
  <h1>Formulario de produto</h1>
  <form action="adiciona-produto.php" method="post">
    <table class="table">
      <?include ("produto-formulario-base.php");?>
      <tr>
        <td><input class="btn btn-primary" type="submit" name="Cadastrar" value="Alterar"></td>
      </tr>
    </table>
  </form>
<?php include("rodape.php");?>
