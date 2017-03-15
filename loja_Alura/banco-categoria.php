<?php

require_once("conecta.php");
//listando todas as categorias
function listaCategorias($conexao){
  $arrayCategorias = array();
  $query = "select * from categorias";
  $resultado = mysqli_query ($conexao, $query);
  while($categoria = mysqli_fetch_assoc($resultado)){
    array_push($arrayCategorias, $categoria);
  }
  return $arrayCategorias;
}
