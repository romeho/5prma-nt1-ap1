<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
        <div class="nav-wrapper teal lighten-1">
          <a href="index.php" class="brand-logo">Sistema</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#modal1" class="modal-trigger">Entrar</a></li>
          </ul>
        </div>
      </nav>
      <div id="pvc" class="row z-depth-3">
  <h2 align="center"><br> Cadastro </h2>
    <form class="col s12">
      <div class="row">
        <div class="center">
          <input placeholder="Nome do Time" id="Nome_time" type="text" class="validate">
          <label for="NomedoTime"></label>
        </div>
        <div class="center">
          <input placeholder="Senha" id="password" type="password" class="validate">
          <label for="password"></label>
        </div>
        <div class="center">
          <input placeholder="Email" id="email" type="email" class="validate">
          <label for="email"></label>
        </div>
        <br>
        <div class="center">
        <input id="enviar" type="submit" name="submit" value="Enviar" class="validate">
        <label for="submit"></label>
      </div>
    </form>
  </div>
</div>
      <!--JavaScript at end of body for optimized loading-->

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
      $('.modal').modal();
      });
      </script>
    </body>
  </html>
