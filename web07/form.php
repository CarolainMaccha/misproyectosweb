
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi primer form procesado</title>
  </head>
  <body style="margin-left:40px;">
    <h1>Mi primer form procesado</h1>
    <?php
      echo "Hola mundo!";
    ?>
    <br><br>
    <form class="" action="procesar.php" method="post">

      <label for="nombre">NOMBRE:</label>&nbsp;&nbsp;
      <input type="text" name="nombre" value="">
      <br><br>
      <label for="apodo">APODO</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="apodo" value="">
      <br><br>
      <label for="">APELLIDO</label>&nbsp;
      <input type="text" name="apellido" value="">
      <br><br>
      <label for="fechanacimiento">FECHA DE NACIMIENTO</label>&nbsp;
      <input type="date" name="fechanacimiento" value="">
      <br><br>
      <label for="color">COLOR</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="color" name="colorfavorito" value="">
      <br><br>
      <label for="nota">¿Qué nota cree que sacá en Aplicaciones Web?</label>&nbsp;
      <input type="range" name="nota" value="">
      <br><br>
      <label for="zodiaco">Signo del zodiaco</label>&nbsp;&nbsp;
      <select name="Zodiaco">
        <option value="Cáncer">Cáncer</option>
        <option value="Acuario">Acuario</option>
        <option value="Piscis">Piscis</option>
        <option value="Sagitario" selected>Sagitario</option>
        <option value="Capricornio">Capricornio</option>
        <option value="Libra">Libra</option>
        <option value="leo">leo</option>
        <option value="Tauro" selected>Tauro</option>
      </select> <br><br>
      <label for="edad">Edad:</label>&nbsp;
      <input type="number" name="edad" value="" min="1" max="90"><br><br>
      <input type="text" name="prueba" value="" placeholder="Información"><br><br>
      <input type="submit" name="" value="Enviar">

    </form>
  </body>
</html>
