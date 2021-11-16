<?php

$numero_aleatorio = 2


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <span style="background-color:<?=rand_color()?>">hola</span>
    <?php
    function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
     ?>
    <h1>Adivina el Número!</h1>
    <div>
    <form  action="index.php" method="post">
      <input type="text" name="numero" value="">
      <input type="submit" name="" value="Enviar">
    </form>
    <br>
    <?php
    if( isset($_POST['numero']) ){
      echo "<h3>Has enviado algo:" ." ". $_POST['numero']."</h3>";
      if ( $numero_aleatorio == $_POST['numero'] ) {
        echo "<h1>Has ganado !!!</h1>".'<img src="confetti.gif" width="500" height="500" />';
      }
      if ($numero_aleatorio < $_POST['numero'] ) {
        echo "<h1>Tu número es mayor !!!</h1>";
      }
      if ($numero_aleatorio > $_POST['numero'] ) {
        echo "<h1>Tu número es menor !!!</h1>";
      }
    } else {
      echo "Bienvenido al juego!";
    }
     ?>
  </div>
  </body>
</html>
