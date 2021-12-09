
<?php

$numero_aleatorio = rand(0,2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="text-align:center;">
    <br><br><br>
    <form class="jugador" action="index.php" method="post" >
      <br><br><br>
         <img src="piedrapapeltijera.png" style="width:80opx;height:300px;" alt=""><br>
        <input type="radio" name="jugador" value="0">
        <input type="radio" name="jugador" value="1">
        <input type="radio" name="jugador" value="2"><br><br>
        <input type="submit" name="" value="Enviar">
      </form>
      <?php
      if( isset($_POST['jugador']) ){
        echo "<h3>Has enviado algo:" ." ". $_POST['jugador']."</h3>";
        if ($numero_aleatorio == $_POST['jugador'] ) {
          echo "<h1>Has empatado !!!!!!</h1>";
        }
        if (($numero_aleatorio==0 && $_POST['jugador']==1 ) || ($numero_aleatorio==1 && $_POST['jugador']==0) || ($numero_aleatorio==2 && $_POST['jugador']==1 )){
            echo "Has Perdido";
        }
        if (($numero_aleatorio==0 && $_POST['jugador']==2)|| ($numero_aleatorio==1 && $_POST['jugador']==2) || ($numero_aleatorio==2 && $_POST['jugador']==0)){
          echo "has Ganado";
        }

        }
     else {
        echo "Bienvenido al juego!";
      } ?>

       <?php echo $numero_aleatorio ?>


      <p>  <a href="index.php">Reiniciar partida</a></p>
  </body>
</html>
