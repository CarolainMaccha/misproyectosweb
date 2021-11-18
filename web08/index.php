<?php
session_start();
if (! isset($_POST['numero']) ){ //si no envio nada
  $_SESSION['numero']=rand(1,10);
  $_SESSION['intentos']=0;
}
$numero_aleatorio = $_SESSION['numero'];
$intentos=$_SESSION['intentos'];
$_SESSION['intentos']=$_SESSION['intentos']+1;
echo "llevas"." ".$intentos." intentos";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

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
    if ($intentos>3) {
        echo "Has perdido!";//calaverra y quitar formulario
    }
     ?>
     <p>  <a href="index.php">Reiniciar partida</a></p>
  </div>
  </body>
</html>
