<?php
  if(isset($_POST["search"])){

    $lista = array();

    foreach ($_SESSION["users"] as $key => $item) {
      $achou = false;
      $achou = strstr($item["nome"], $_POST["search"]);
      if($achou){
        $lista() = $item;
      }
    }
    $_SESSION["listagem"] = $lista;
    header('Location: consulta.php');
  }

  header('Location: consulta.php?erro=notfound');
 ?>
