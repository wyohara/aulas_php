<?php
require_once 'banco-usuario.php';
require_once 'logica-usuario.php';
$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

logaUsuario( $usuario["email"]); //setand o cookie do usuario

if($usuario == null){
  $_SESSION["danger"] = "Usuario ou senha inválido.";
  header("Location:index.php");
}else{
  $_SESSION["success"] = "Usuario logado com sucesso.";
  header("Location:index.php");
}
die();
