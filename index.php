
<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <section>
        <form class="form" method="post" action="authentication.php">
          <fieldset>
            <p>User<br><input type="text" name="user" placeholder="User" value="admin"></p>
            <p>Password<br><input type="password" name="password" placeholder="Password" value="admin"></p>
            <input type="submit" name="submit" value="Submit"><br>
            <p>
              <?php
              if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
              }
              ?>
            </p>
          </fieldset>
        </form>
      </section>
    </div>
  </body>
</html>
