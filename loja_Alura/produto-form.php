<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario(); //verifica se o usuario está logado com cookie
$produto = array('nome' =>'' , 'valor'=>'', 'descricao' => '',  'categoria_id' => '1');
$usado='';

$categorias = listaCategorias($conexao);
?>
  <h1>Formulario de produto</h1>
  <form action="adiciona-produto.php" method="post">
    <table class="table">
      <?require_once ("produto-formulario-base.php");?>
      <tr>
        <td><input class="btn btn-primary" type="submit" name="Cadastrar" value="Alterar"></td>
      </tr>
    </table>
  </form>
<?php require_once("rodape.php");?>
