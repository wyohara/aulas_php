<?php
session_start(); // inicia a session para garantir

  function mostraAlerta($tipo){
    if(isset($_SESSION[$tipo])){
      ?>
      <p class="alert-<?=$tipo?>"> <?= $_SESSION[$tipo]?></p>
      <?php
      unset($_SESSION[$tipo]);
    };
  };
?>
