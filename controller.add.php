<?php
session_start();
if(isset($_POST['btn-cadastrar'])):
  foreach ($_SESSION["users"] as $key => $item){
      $proximo = $key + 1;
  }

  $_SESSION["users"] [$proximo] ["nome"] = $_POST["nome"];
  $_SESSION["users"] [$proximo] ["email"] = $_POST["email"];
  $_SESSION["users"] [$proximo] ["idade"] = $_POST["idade"];

  // Atualiza a listagem (view)
  $_SESSION["listagem"] = $_SESSION["users"];
  // Redicerionamos para exibir a listagem com o novo usuário.
  header ('Location: home.php');
endif;

 ?>
