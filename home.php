<?php
  session_start();
  //header
  include_once 'template.header.php';
  ?>

  <div class="row">
    <div class="col s12 m6 push-m3 ">
      <h3 class="light">Clientes</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Nome: </th>
            <th>Email: </th>
            <th>Idade: </th>
          </tr>
        </thead>

        <tbody>
          <?php
          if(isset($_SESSION["listagem"])){
            foreach ($_SESSION["listagem"] as $key => $item) {
           ?>
          <tr>
          <td><?= $item["nome"]; ?></td>
          <td><?= $item["email"]; ?></td>
          <td><?= $item["idade"]; ?></td>
          <td><a href="editar.php" class="btn-floating green"><i class="material-icons">edit</i></a></td>
          <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
            <!--<td>Romero Bezerra da Silva</td>
            <td>r@r</td>
            <td>22</td>
            <td><a href="editar.php" class="btn-floating green"><i class="material-icons">edit</i></a></td>
            <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>-->
          </tr>
          <?php
          }
        }
           ?>
        </tbody>
      </table>
      <br>
      <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
  </div>

<?php
  //footer
  include_once 'template.footer.php';
 ?>
