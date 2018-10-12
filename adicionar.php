<?php
  //header
  include_once 'template.header.php';
  include_once 'controller.add.php';

  ?>

  <div class="row">
    <div class="col s12 m6 push-m3 ">
      <h3 class="light">Novo cliente</h3>

      <form action="controller.add.php" method="post">
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="idade" id="idade">
          <label for="idade">Idade</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        <a href="home.php" class="btn green">Lista de clientes</a>
      </form>

    </div>
  </div>

<?php
  //footer
  include_once 'template.footer.php';
 ?>
