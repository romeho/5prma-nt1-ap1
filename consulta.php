<?php
  include 'template.header.php';
 ?>

 <form action="controller.search.php" method="post">
   <input id="search" type="text" name="search">
   <label for="search">Procurar</label>
   <button type="submit" name="action">
    <i>send</i>
 </form>

<?php
  include 'template.footer.php';
 ?>
